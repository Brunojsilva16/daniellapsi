<?php

namespace App\Controllers;

/**
 * Classe base para todos os controladores da aplicação.
 * Centraliza a lógica de renderização das views dentro do layout principal.
 */
class BaseController
{
    /**
     * Renderiza uma view dentro do layout principal.
     *
     * @param string $view Nome do arquivo da view dentro de app/views/pages sem .php.
     * @param array $options Dados e configurações da página.
     */
    protected function render(string $view, array $options = []): void
    {
        $pageTitle = $options['title'] ?? 'Plataforma de Cursos';
        $metaDescription = $options['metaDescription'] ?? '';

        $faviconImg = $options['favicon'] ?? (
            defined('BASE_URL')
                ? BASE_URL . '/assets/img/favicon_conecta.png'
                : '/assets/img/favicon_conecta.png'
        );

        $htmlClass = $options['htmlClass'] ?? '';
        $bodyClass = $options['bodyClass'] ?? 'bg-gray-100';

        $pageStyles = $options['styles'] ?? [];
        $pageScriptsHeader = $options['scriptsHeader'] ?? [];
        $pageScriptsFooter = $options['scriptsFooter'] ?? [];
        $headContent = $options['headContent'] ?? '';
        $beforeBodyClose = $options['beforeBodyClose'] ?? '';
        $tailwindConfig = $options['tailwindConfig'] ?? '';

        $fullWidthLayout = $options['fullWidthLayout'] ?? false;
        $hideHeaderNav = $options['hideHeaderNav'] ?? false;

        // Disponibiliza as variáveis em $options para a view.
        extract($options, EXTR_SKIP);

        ob_start();
        $viewPath = VIEWS_PATH . "/pages/{$view}.php";

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "<p>Erro: View não encontrada em: " . htmlspecialchars($viewPath) . "</p>";
        }

        $pageContent = ob_get_clean();

        require VIEWS_PATH . '/layout.php';
    }
}
