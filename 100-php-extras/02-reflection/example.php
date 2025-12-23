<?php
// example.php - Reflection demo
// Date created: 2025-12-23
// Created by: Michael Monteith

class Demo
{
    public function hello($name) { return "Hello, {$name}"; }
}

$reflect = new ReflectionClass('Demo');
echo "<p>Class: {$reflect->getName()}</p>";

foreach ($reflect->getMethods() as $method) {
    echo "<p>Method: {$method->getName()}</p>";
}
