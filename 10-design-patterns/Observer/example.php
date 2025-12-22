<?php
// example.php - Demonstrates the Observer pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Observer.php";

$center = new NotificationCenter();
$center->addObserver(new User("Alice"));
$center->addObserver(new User("Bob"));

echo "<h1>Observer Pattern Example</h1>";
echo $center->notify("System update available.");
