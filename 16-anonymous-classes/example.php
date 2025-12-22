<?php
// example.php - Demonstrates anonymous classes
// Date created: 2025-12-22
// Created by: Michael Monteith

$logger = new class {
    public function log($msg)
    {
        return "Anonymous logger: {$msg}";
    }
};

echo "<h1>Anonymous Classes Example</h1>";
echo "<p>{$logger->log('Hello')}</p>";
