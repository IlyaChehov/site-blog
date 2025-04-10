<?php

namespace Core\Classes;

class Router
{
    protected string $uri;
    protected string $method;
    protected array $routes = [];

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    protected function add(string $uri, string $controller, string $method): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route) {
            if (($route['uri'] === $this->uri) && ($route['method'] === strtoupper($this->method))) {
                $matches = true;
                require_once DIR_CONTROLLERS . "/{$route['controller']}";
                break;
            }
        }
        if (!$matches) {
            showError(404);
        }
    }

    public function get(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'DELETE');
    }
}