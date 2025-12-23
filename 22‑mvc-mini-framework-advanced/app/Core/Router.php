<?php
// Router.php - Router for Advanced MVC framework
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Router
{
    private $routes = [];

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(Request $request, Response $response)
    {
        $path = $request->getPath();

        if (isset($this->routes[$path])) {
            [$controllerName, $method] = $this->routes[$path];
            $controller = new $controllerName();
            return $controller->$method($request, $response);
        }

        return $response->setContent("404 Not Found");
    }
}
