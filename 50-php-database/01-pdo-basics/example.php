<?php
// example.php - Simple query with PDO
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "connect.php";

$pdo->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT)");

$pdo->exec("INSERT INTO users (name) VALUES ('Michael')");
$stmt = $pdo->query("SELECT * FROM users");

foreach ($stmt as $row) {
    echo "<p>User: {$row['name']}</p>";
}
