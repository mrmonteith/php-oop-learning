<?php
// index.php - Front controller for Advanced MVC framework
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once __DIR__ . '/../app/Core/Autoloader.php';
App\Core\Autoloader::register();

// Define routes
$routes = [
    '/' => ['App\Controllers\HomeController', 'index'],
];

// Dispatch request
$request = new App\Core\Request();
$response = new App\Core\Response();

$router = new App\Core\Router($routes);
echo $router->dispatch($request, $response);
