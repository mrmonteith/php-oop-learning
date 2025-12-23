<?php
// example.php - Prepared statements with PDO
// Date created: 2025-12-23
// Created by: Michael Monteith

$pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ensure the table exists
$pdo->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT)");

$stmt = $pdo->prepare("INSERT INTO users (name) VALUES (:name)");
$stmt->execute([':name' => 'Alice']);

$stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name");
$stmt->execute([':name' => 'Alice']);
$user = $stmt->fetch();

echo "<p>Fetched user: {$user['name']}</p>";
