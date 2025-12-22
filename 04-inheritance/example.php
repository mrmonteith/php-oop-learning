<?php
// example.php - Demonstrates class inheritance
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Dog.php";

$dog = new Dog();
$dog->name = "Buddy";

echo "<h1>Inheritance Example</h1>";
echo "<p>{$dog->speak()}</p>";
