<?php
// example.php - Demonstrates dependency injection
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "UserService.php";

$service = new UserService(new Logger());

echo "<h1>Dependency Injection Example</h1>";
echo "<p>{$service->register('michael')}</p>";
