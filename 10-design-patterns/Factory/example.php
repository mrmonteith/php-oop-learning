<?php
// example.php - Demonstrates the Factory pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Factory.php";

$vehicle = VehicleFactory::create('car');

echo "<h1>Factory Pattern Example</h1>";
echo "<p>{$vehicle->drive()}</p>";
