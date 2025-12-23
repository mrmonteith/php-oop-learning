<?php
// example.php - PHP 8 attributes demo
// Date created: 2025-12-23
// Created by: Michael Monteith

#[Attribute]
class Route
{
    public string $path;
    public function __construct(string $path) { $this->path = $path; }
}

class Controller
{
    #[Route("/home")]
    public function index() { return "Home page"; }
}

$reflect = new ReflectionMethod(Controller::class, 'index');
$attributes = $reflect->getAttributes(Route::class);

foreach ($attributes as $attr) {
    $route = $attr->newInstance();
    echo "<p>Route path: {$route->path}</p>";
}
