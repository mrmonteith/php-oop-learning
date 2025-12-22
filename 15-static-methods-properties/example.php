<?php
// example.php - Demonstrates static usage
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "MathHelper.php";

echo "<h1>Static Methods & Properties Example</h1>";
echo "<p>PI = " . MathHelper::$pi . "</p>";
echo "<p>Square of 5 = " . MathHelper::square(5) . "</p>";
