<?php

namespace App\Core;

class Router
{
    protected array $routes = [
        'GET' => [],
        'POST' => [],
        'DELETE' => [],
    ];

    public function get(string $uri, array $controllerAction): void
    {
        $this->routes['GET'][$this->normalizeUri($uri)] = $controllerAction;
    }

    public function post(string $uri, array $controllerAction): void
    {
        $this->routes['POST'][$this->normalizeUri($uri)] = $controllerAction;
    }

    public function delete(string $uri, array $controllerAction): void
    {
        $this->routes['DELETE'][$this->normalizeUri($uri)] = $controllerAction;
    }

    public function dispatch(string $url, string $method): void
    {
        $method = strtoupper($method);
        $uri = $this->normalizeUri($url);

        if (!isset($this->routes[$method])) {
            http_response_code(405);
            echo 'Método não permitido.';
            return;
        }

        foreach ($this->routes[$method] as $route => $action) {
            $regex = '#^' . preg_replace('/\\\\\{\w+\\\\\}/', '([^/]+)', preg_quote($route, '#')) . '$#';

            if (preg_match($regex, $uri, $matches)) {
                array_shift($matches);

                [$controllerName, $methodName] = $action;

                $controllerInstance = new $controllerName();
                call_user_func_array([$controllerInstance, $methodName], $matches);
                return;
            }
        }

        http_response_code(404);
        $controller = new \App\Controllers\PageController();
        $controller->notFound();
    }

    private function normalizeUri(string $uri): string
    {
        $path = parse_url($uri, PHP_URL_PATH);
        return trim((string) $path, '/');
    }
}
