<?php
// example.php - Demonstrates enum usage
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Status.php";

$status = Status::Active;

echo "<h1>Enums Example</h1>";
echo "<p>Status: {$status->name}</p>";
