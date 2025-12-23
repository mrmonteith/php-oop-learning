<?php
// example.php - JSON integration demo
// Date created: 2025-12-23
// Created by: Michael Monteith

$data = ["name" => "Michael", "email" => "michael@example.com"];

// Encode to JSON
$json = json_encode($data);
echo "<p>JSON: {$json}</p>";

// Decode back to array
$array = json_decode($json, true);
echo "<p>Name: {$array['name']}</p>";
