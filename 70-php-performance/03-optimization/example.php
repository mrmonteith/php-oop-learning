<?php
// example.php - Optimization demo
// Date created: 2025-12-23
// Created by: Michael Monteith

// Inefficient: concatenating in loop
$start = microtime(true);
$str = "";
for ($i = 0; $i < 10000; $i++) {
    $str .= "x";
}
$end = microtime(true);
echo "<p>Loop concat: " . ($end - $start) . " seconds</p>";

// Efficient: use str_repeat
$start = microtime(true);
$str = str_repeat("x", 10000);
$end = microtime(true);
echo "<p>str_repeat: " . ($end - $start) . " seconds</p>";
