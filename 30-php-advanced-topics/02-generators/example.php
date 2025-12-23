<?php
// example.php - Demonstrates generators
// Date created: 2025-12-23
// Created by: Michael Monteith

function numbers()
{
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}

echo "<h1>Generators Example</h1>";
foreach (numbers() as $n) {
    echo "<p>{$n}</p>";
}
