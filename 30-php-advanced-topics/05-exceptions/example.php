<?php
// example.php - Demonstrates exceptions
// Date created: 2025-12-23
// Created by: Michael Monteith

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero");
    }
    return $a / $b;
}

echo "<h1>Exceptions Example</h1>";

try {
    echo "<p>Result: " . divide(10, 0) . "</p>";
} catch (Exception $e) {
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}
