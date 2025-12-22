<?php
// example.php - Demonstrates abstract classes
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Circle.php";

$circle = new Circle(5);

echo "<h1>Abstract Classes Example</h1>";
echo "<p>Area of circle: {$circle->getArea()}</p>";
