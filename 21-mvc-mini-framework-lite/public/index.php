<?php
// index.php - Front controller for Lite MVC framework
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/BaseController.php';

// Load controllers automatically
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../app/Controllers/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

// Define routes
$routes = [
    '/' => ['HomeController', 'index'],
];

// Run router
$router = new Router($routes);
echo $router->dispatch($_SERVER['REQUEST_URI']);
