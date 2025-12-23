<?php
// Router.php - Router with middleware support
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Router
{
    private $routes = [];
    private $container;

    public function __construct($routes, Container $container)
    {
        $this->routes = $routes;
        $this->container = $container;
    }

    public function dispatch(Request $request, Response $response)
    {
        $path = $request->getPath();

        if (isset($this->routes[$path])) {
            [$controllerName, $method] = $this->routes[$path];
            $controller = new $controllerName($this->container);
            return $controller->$method($request, $response);
        }

        return $response->setContent("404 Not Found");
    }
}
