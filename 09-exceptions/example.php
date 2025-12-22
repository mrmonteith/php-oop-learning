<?php
// example.php - Demonstrates throwing and catching exceptions
// Date created: 2025-12-22
// Created by: Michael Monteith

function divide($a, $b)
{
    if ($b === 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $a / $b;
}

echo "<h1>Exceptions Example</h1>";

try {
    echo "<p>Result: " . divide(10, 0) . "</p>";
} catch (Exception $e) {
    echo "<p>Caught exception: {$e->getMessage()}</p>";
}
