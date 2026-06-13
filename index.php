<?php

declare(strict_types=1);

require_once __DIR__ . '/app/bootstrap.php';

use App\Core\Router;

$router = new Router();

$routesPath = __DIR__ . '/app/Routes/routes.php';

if (file_exists($routesPath)) {
    require_once $routesPath;
} else {
    http_response_code(500);
    echo '<b>Erro:</b> Arquivo de rotas não encontrado.';
    exit;
}

$url = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if (BASE_URL !== '' && strpos($url, BASE_URL) === 0) {
    $url = substr($url, strlen(BASE_URL));
}

if ($url === '' || $url === false) {
    $url = '/';
}

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router->dispatch($url, $method);
