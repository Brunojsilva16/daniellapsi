<?php

declare(strict_types=1);

date_default_timezone_set('America/Recife');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Em produção, deixe display_errors como 0 para não expor detalhes ao visitante.
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', dirname(__DIR__) . '/app/views/');
}

if (!defined('BASE_URL')) {
    $baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

    // Quando o arquivo chamado for /lead-enviar.php, dirname($_SERVER['SCRIPT_NAME']) ainda aponta para a raiz do projeto.
    if ($baseUrl === '/' || $baseUrl === '.' || $baseUrl === '\\') {
        $baseUrl = '';
    }

    define('BASE_URL', $baseUrl);
}

if (!defined('PUBLIC_APP_PATH')) {
    define('PUBLIC_APP_PATH', dirname(__DIR__));
}

$autoloadPath = dirname(__DIR__) . '/vendor/autoload.php';
$composerAutoloadReal = dirname(__DIR__) . '/vendor/composer/autoload_real.php';

if (file_exists($autoloadPath) && file_exists($composerAutoloadReal)) {
    require_once $autoloadPath;
} else {
    spl_autoload_register(function (string $class): void {
        $prefix = 'App\\';
        $baseDir = dirname(__DIR__) . '/app/';

        if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
            return;
        }

        $relativeClass = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    });
}

$envFile = dirname(__DIR__) . '/.env';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        if (strpos($line, '=') !== false) {
            [$name, $value] = explode('=', $line, 2);

            $name = trim($name);
            $value = trim($value);
            $value = trim($value, "\"'");

            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
            putenv($name . '=' . $value);
        }
    }
}
