<?php
// example.php - Using custom iterator
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "NumberIterator.php";

echo "<h1>Iterator Example</h1>";
$iter = new NumberIterator();
foreach ($iter as $key => $val) {
    echo "<p>{$key}: {$val}</p>";
}
