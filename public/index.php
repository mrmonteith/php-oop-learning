<?php
// index.php - This gives you a dynamic menu of all topic folders
// Date created: 2025-12-22 
// Created by: Michael Monteith 

$baseDir = realpath(__DIR__ . '/..');
$folders = glob($baseDir . '/*', GLOB_ONLYDIR);

echo "<h1>PHP OOP Learning</h1>";
echo "<p>Select a topic to view its example:</p>";
echo "<ul>";

foreach ($folders as $folder) {
    $name = basename($folder);
    $example = $folder . '/example.php';

    if (file_exists($example)) {
        echo "<li><a href=\"../$name/example.php\">$name</a></li>";
    }
}

echo "</ul>";
