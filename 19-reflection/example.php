<?php
// example.php - Demonstrates PHP Reflection API
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "User.php";

$reflection = new ReflectionClass('User');

echo "<h1>Reflection API Example</h1>";
echo "<p>Class: {$reflection->getName()}</p>";

echo "<h2>Properties:</h2>";
foreach ($reflection->getProperties() as $prop) {
    echo "<p>{$prop->getName()}</p>";
}
