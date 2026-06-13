<?php

namespace App\Controllers;

class LeadController
{
    public function enviar(): void
    {
        header('Content-Type: application/json; charset=utf-8');

        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
            $this->json(['status' => 'error', 'message' => 'Método não permitido.'], 405);
            return;
        }

        try {
            $dados = [
                'nome' => $this->input('nome'),
                'email' => $this->input('email'),
                'telefone' => $this->input('telefone'),
                'assunto' => $this->input('assunto'),
                'formato_sessao' => $this->input('formato_sessao'),
                'mensagem' => $this->input('mensagem'),
            ];

            $erros = $this->validar($dados);

            if (!empty($erros)) {
                $this->json([
                    'status' => 'error',
                    'message' => implode(' ', $erros),
                ], 422);
                return;
            }

            $scriptUrl = $this->googleScriptUrl();

            if ($scriptUrl === '' || strpos($scriptUrl, 'GOOGLE_SCRIPT_URL') !== false || !filter_var($scriptUrl, FILTER_VALIDATE_URL)) {
                $this->json([
                    'status' => 'error',
                    'message' => 'A URL do Google Apps Script não foi configurada corretamente no arquivo .env. Configure GOOGLE_SCRIPT_URL com a URL do Web App.',
                ], 500);
                return;
            }

            $resposta = $this->enviarParaGoogleAppsScript($scriptUrl, $dados);
            $json = json_decode($resposta, true);

            if (!is_array($json)) {
                $this->json([
                    'status' => 'error',
                    'message' => 'O Google Apps Script não retornou um JSON válido. Verifique a implantação do Web App.',
                    'raw' => mb_substr($resposta, 0, 300),
                ], 502);
                return;
            }

            if (($json['status'] ?? '') !== 'success') {
                $this->json([
                    'status' => 'error',
                    'message' => $json['message'] ?? 'O Google Apps Script retornou erro ao salvar na planilha.',
                ], 502);
                return;
            }

            $this->json([
                'status' => 'success',
                'message' => 'Dados salvos na planilha com sucesso.',
            ]);
        } catch (\Throwable $e) {
            $this->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    private function input(string $key): string
    {
        return trim((string)($_POST[$key] ?? ''));
    }

    private function validar(array $dados): array
    {
        $erros = [];

        if ($dados['nome'] === '') {
            $erros[] = 'Informe o nome.';
        }

        if ($dados['email'] === '' || !filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            $erros[] = 'Informe um email válido.';
        }

        $telefoneLimpo = preg_replace('/\D+/', '', $dados['telefone']);

        if (strlen($telefoneLimpo) < 10 || strlen($telefoneLimpo) > 11) {
            $erros[] = 'Informe um telefone válido com DDD.';
        }

        if ($dados['assunto'] === '' || $dados['assunto'] === 'Selecione...') {
            $erros[] = 'Selecione como posso te ajudar.';
        }

        if ($dados['mensagem'] === '') {
            $erros[] = 'Informe a mensagem.';
        }

        return $erros;
    }

    private function googleScriptUrl(): string
    {
        $url = $_ENV['GOOGLE_SCRIPT_URL'] ?? $_SERVER['GOOGLE_SCRIPT_URL'] ?? getenv('GOOGLE_SCRIPT_URL') ?: '';
        return trim((string)$url);
    }

    private function enviarParaGoogleAppsScript(string $url, array $dados): string
    {
        $payload = http_build_query($dados, '', '&', PHP_QUERY_RFC3986);

        if (function_exists('curl_init')) {
            /**
             * O Google Apps Script normalmente salva os dados no primeiro POST e,
             * em seguida, responde com redirecionamento para uma URL googleusercontent.
             *
             * O problema anterior acontecia porque o cURL seguia esse redirecionamento
             * mantendo o método POST. A URL final aceita GET, não POST, e por isso
             * retornava HTTP 405 mesmo depois de o lead já ter sido salvo na planilha.
             *
             * Aqui fazemos em duas etapas:
             * 1) POST para /exec;
             * 2) se houver 301/302/303/307/308, fazemos GET na URL informada em Location.
             */
            $primeiraResposta = $this->curlRequest($url, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $payload,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
                    'Accept: application/json',
                ],
            ]);

            if ($primeiraResposta['statusCode'] >= 300 && $primeiraResposta['statusCode'] < 400) {
                $redirectUrl = $this->extrairLocationHeader($primeiraResposta['headers']);

                if ($redirectUrl === '') {
                    throw new \RuntimeException('Google Apps Script redirecionou, mas não informou a URL de destino.');
                }

                $segundaResposta = $this->curlRequest($redirectUrl, [
                    CURLOPT_HTTPGET => true,
                    CURLOPT_HTTPHEADER => [
                        'Accept: application/json',
                    ],
                ]);

                if ($segundaResposta['statusCode'] >= 400) {
                    throw new \RuntimeException('Google Apps Script retornou HTTP ' . $segundaResposta['statusCode'] . '. Resposta: ' . mb_substr($segundaResposta['body'], 0, 300));
                }

                return $segundaResposta['body'];
            }

            if ($primeiraResposta['statusCode'] >= 400) {
                throw new \RuntimeException('Google Apps Script retornou HTTP ' . $primeiraResposta['statusCode'] . '. Resposta: ' . mb_substr($primeiraResposta['body'], 0, 300));
            }

            return $primeiraResposta['body'];
        }

        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded;charset=UTF-8\r\nAccept: application/json\r\n",
                'content' => $payload,
                'timeout' => 30,
                'ignore_errors' => true,
                'follow_location' => 1,
                'max_redirects' => 5,
            ],
        ]);

        $response = file_get_contents($url, false, $context);

        if ($response === false) {
            throw new \RuntimeException('Não foi possível enviar para o Google Apps Script. Verifique se allow_url_fopen ou cURL está habilitado no servidor.');
        }

        return (string)$response;
    }

    /**
     * @return array{statusCode:int, headers:string, body:string}
     */
    private function curlRequest(string $url, array $extraOptions = []): array
    {
        $ch = curl_init($url);

        $defaultOptions = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_CONNECTTIMEOUT => 15,
            CURLOPT_TIMEOUT => 30,
        ];

        curl_setopt_array($ch, $defaultOptions + $extraOptions);

        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        $statusCode = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $headerSize = (int)curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        curl_close($ch);

        if ($response === false) {
            throw new \RuntimeException('Erro cURL ao enviar para o Google Sheets: ' . $curlError);
        }

        return [
            'statusCode' => $statusCode,
            'headers' => substr((string)$response, 0, $headerSize),
            'body' => substr((string)$response, $headerSize),
        ];
    }

    private function extrairLocationHeader(string $headers): string
    {
        if (preg_match('/^Location:\s*(.+)$/im', $headers, $matches)) {
            return trim($matches[1]);
        }

        return '';
    }

    private function json(array $payload, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
