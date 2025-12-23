<?php
// connect.php - Basic PDO connection
// Date created: 2025-12-23
// Created by: Michael Monteith

$dsn = "sqlite:" . __DIR__ . "/database.sqlite";
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
