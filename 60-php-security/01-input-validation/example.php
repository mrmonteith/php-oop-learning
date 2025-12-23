<?php
// example.php - Input validation demo
// Date created: 2025-12-23
// Created by: Michael Monteith

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$email = "test@example.com";
echo "<p>Email valid? " . (validateEmail($email) ? "Yes" : "No") . "</p>";
