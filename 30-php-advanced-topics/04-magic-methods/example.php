<?php
// example.php - Using magic methods
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "MagicDemo.php";

$obj = new MagicDemo();
$obj->foo = "bar";

echo "<h1>Magic Methods Example</h1>";
echo "<p>foo = {$obj->foo}</p>";
echo "<p>{$obj->undefinedMethod('arg1', 'arg2')}</p>";
