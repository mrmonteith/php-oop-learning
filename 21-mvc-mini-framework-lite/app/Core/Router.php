<?php
// Router.php - Simple router for Lite MVC framework
// Date created: 2025-12-22
// Created by: Michael Monteith

class Router
{
    private $routes = [];

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function dispatch($uri)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes[$path])) {
            [$controllerName, $method] = $this->routes[$path];

            $controller = new $controllerName();
            return $controller->$method();
        }

        return "404 Not Found";
    }
}
