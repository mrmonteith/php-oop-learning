<?php
// example.php - ORM simulation demo
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "User.php";

$pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
User::setConnection($pdo);

$pdo->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT)");

$user = new User("David");
$user->save();

foreach (User::all() as $u) {
    echo "<p>User: {$u->name}</p>";
}
