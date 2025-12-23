<?php
// example.php - Password hashing demo
// Date created: 2025-12-23
// Created by: Michael Monteith

$password = "secret123";

// Hash password
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "<p>Hashed: {$hash}</p>";

// Verify password
if (password_verify($password, $hash)) {
    echo "<p>Password verified</p>";
} else {
    echo "<p>Password invalid</p>";
}
