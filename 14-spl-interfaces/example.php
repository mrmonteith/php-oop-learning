<?php
// example.php - Demonstrates SPL interfaces
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "ItemCollection.php";

$collection = new ItemCollection(['apple', 'banana', 'cherry']);

echo "<h1>SPL Interfaces Example</h1>";

foreach ($collection as $item) {
    echo "<p>{$item}</p>";
}

echo "<p>Total items: " . count($collection) . "</p>";
