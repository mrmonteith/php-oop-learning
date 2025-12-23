<?php
// example.php - Async demo using Fibers (PHP 8.1+)
// Date created: 2025-12-23
// Created by: Michael Monteith

$fiber = new Fiber(function() {
    echo "Fiber started\n";
    Fiber::suspend("Paused");
    echo "Fiber resumed\n";
});

echo $fiber->start();
echo $fiber->resume();
