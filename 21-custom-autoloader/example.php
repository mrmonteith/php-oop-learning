<?php
// example.php - Demonstrates custom autoloader
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Autoloader.php";
Autoloader::register();

class TestClass
{
    public function hello()
    {
        return "Autoloader working!";
    }
}

$obj = new TestClass();

echo "<h1>Custom Autoloader Example</h1>";
echo "<p>{$obj->hello()}</p>";
