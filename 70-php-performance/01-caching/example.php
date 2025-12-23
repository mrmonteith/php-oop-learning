<?php
// example.php - Simple caching demo
// Date created: 2025-12-23
// Created by: Michael Monteith

$cacheFile = __DIR__ . "/cache.txt";

// If cache exists and is fresh, use it
if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 60) {
    echo "<p>From cache: " . file_get_contents($cacheFile) . "</p>";
} else {
    $data = "Expensive computation result at " . date("H:i:s");
    file_put_contents($cacheFile, $data);
    echo "<p>Fresh data: {$data}</p>";
}
