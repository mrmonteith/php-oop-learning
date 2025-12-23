<?php
// example.php - Profiling demo
// Date created: 2025-12-23
// Created by: Michael Monteith

function slowFunction()
{
    usleep(500000); // simulate 0.5s delay
    return "Done";
}

$start = microtime(true);
$result = slowFunction();
$end = microtime(true);

echo "<p>Result: {$result}</p>";
echo "<p>Execution time: " . ($end - $start) . " seconds</p>";
