<?php
// example.php - Demonstrates creating and using a Person object
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Person.php";

$person = new Person();
$person->name = "Alice";
$person->age = 30;

echo "<h1>Classes & Objects Example</h1>";
echo "<p>{$person->sayHello()}</p>";
