<?php
// example.php - Demonstrates the Singleton pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Singleton.php";

$instance = Singleton::getInstance();

echo "<h1>Singleton Pattern Example</h1>";
echo "<p>{$instance->sayHello()}</p>";
