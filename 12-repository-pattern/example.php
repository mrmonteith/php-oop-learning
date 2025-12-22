<?php
// example.php - Demonstrates the Repository pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "UserRepository.php";

$repo = new UserRepository();
$user = $repo->find(1);

echo "<h1>Repository Pattern Example</h1>";
echo "<p>User found: {$user['name']}</p>";
