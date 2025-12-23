<?php
// example.php - Escaping output demo
// Date created: 2025-12-23
// Created by: Michael Monteith

$userInput = "<script>alert('XSS');</script>";

echo "<p>Unsafe output: {$userInput}</p>";
echo "<p>Safe output: " . htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8') . "</p>";
