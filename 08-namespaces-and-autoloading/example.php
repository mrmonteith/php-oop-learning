<?php
// example.php - Demonstrates namespaces and autoloading
// Date created: 2025-12-22
// Created by: Michael Monteith

spl_autoload_register(function ($class) {
    $path = str_replace("App\\", "src/", $class);
    $path = str_replace("\\", "/", $path);
    require_once $path . ".php";
});

use App\Models\User;
use App\Services\UserService;

$user = new User("Michael");
$service = new UserService();

echo "<h1>Namespaces & Autoloading Example</h1>";
echo "<p>{$service->greet($user)}</p>";
