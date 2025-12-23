<?php
// example.php - CLI tool demo
// Date created: 2025-12-23
// Created by: Michael Monteith

if (php_sapi_name() !== 'cli') {
    exit("Run this script from the command line.\n");
}

$options = getopt("n:");
$name = $options['n'] ?? "Guest";

echo "Hello, {$name}!\n";
