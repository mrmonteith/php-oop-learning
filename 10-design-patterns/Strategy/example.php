<?php
// example.php - Demonstrates the Strategy pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Strategy.php";

$checkout = new Checkout(new PayPalPayment());

echo "<h1>Strategy Pattern Example</h1>";
echo "<p>{$checkout->process(49.99)}</p>";
