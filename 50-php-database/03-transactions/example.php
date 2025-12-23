<?php
// example.php - Transactions with PDO
// Date created: 2025-12-23
// Created by: Michael Monteith

$pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ensure the table exists before using it
$pdo->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    name TEXT
)");

try {
    $pdo->beginTransaction();

    $pdo->exec("INSERT INTO users (name) VALUES ('Bob')");
    $pdo->exec("INSERT INTO users (name) VALUES ('Carol')");

    $pdo->commit();
    echo "Transaction committed";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Transaction failed: " . $e->getMessage();
}
