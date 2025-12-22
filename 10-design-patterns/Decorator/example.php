<?php
// example.php - Demonstrates the Decorator pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "EmailDecorator.php";

$notifier = new Notifier();
$decorated = new EmailDecorator($notifier);

echo "<h1>Decorator Pattern Example</h1>";
echo "<p>{$decorated->send('System update available')}</p>";
