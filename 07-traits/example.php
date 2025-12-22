<?php
// example.php - Demonstrates traits
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Application.php";

$app = new Application();

echo "<h1>Traits Example</h1>";
echo "<p>{$app->log('App started')}</p>";
