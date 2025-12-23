<?php
// example.php - Demonstrates interfaces
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once __DIR__ . "/FileLogger.php";

$logger = new FileLogger();
$logger->log("Hello from interface example");

echo "<p>Message logged to file.</p>";
