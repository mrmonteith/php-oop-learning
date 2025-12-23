<?php
// index.php - Front controller for Pro MVC framework
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once __DIR__ . '/../app/Core/Autoloader.php';
App\Core\Autoloader::register();

// Load config
$config = new App\Core\Config(__DIR__ . '/../config.php');

// Define routes
$routes = [
    '/' => ['App\Controllers\HomeController', 'index'],
];

// Setup container
$container = new App\Core\Container();
$container->set('config', $config);

// Dispatch request
$request = new App\Core\Request();
$response = new App\Core\Response();

$router = new App\Core\Router($routes, $container);
echo $router->dispatch($request, $response);
