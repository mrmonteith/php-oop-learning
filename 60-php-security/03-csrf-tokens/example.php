<?php
// example.php - CSRF token demo
// Date created: 2025-12-23
// Created by: Michael Monteith

session_start();

// Generate token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Validate token
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        echo "CSRF token valid";
    } else {
        echo "CSRF token invalid";
    }
}
?>

<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
    <button type="submit">Submit</button>
</form>
