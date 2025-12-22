<?php
// example.php - Demonstrates using a constructor to initialize objects
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "User.php";

$user = new User("michael", "michael@example.com");

echo "<h1>Constructors Example</h1>";
echo "<p>{$user->getInfo()}</p>";
