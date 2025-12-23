<?php
// example.php - Loading environment variables
// Date created: 2025-12-23
// Created by: Michael Monteith

$env = parse_ini_file(__DIR__ . "/.env");

echo "<p>Database host: {$env['DB_HOST']}</p>";
echo "<p>Database name: {$env['DB_NAME']}</p>";
