<?php
// example.php - Demonstrates interface implementation
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "FileLogger.php";

$logger = new FileLogger();

echo "<h1>Interfaces Example</h1>";
echo "<p>{$logger->log('System started')}</p>";
