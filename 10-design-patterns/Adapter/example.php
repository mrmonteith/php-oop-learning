<?php
// example.php - Demonstrates the Adapter pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "PrinterAdapter.php";

$adapter = new PrinterAdapter(new LegacyPrinter());

echo "<h1>Adapter Pattern Example</h1>";
echo "<p>{$adapter->print('Hello World')}</p>";
