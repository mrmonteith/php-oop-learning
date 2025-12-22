<?php
// example.php - Demonstrates PHP attributes
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Controller.php";

$controller = new Controller();
$reflection = new ReflectionMethod($controller, 'home');
$attributes = $reflection->getAttributes();

echo "<h1>Attributes Example</h1>";

foreach ($attributes as $attr) {
    $instance = $attr->newInstance();
    echo "<p>Route path: {$instance->path}</p>";
}
