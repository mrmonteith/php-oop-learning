<?php
// example.php - Demonstrates accessing properties and calling methods
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Car.php";

$car = new Car();
$car->make = "Toyota";
$car->model = "Camry";
$car->year = 2020;

echo "<h1>Properties & Methods Example</h1>";
echo "<p>Your car is: {$car->getDescription()}</p>";
