<?php
// LoggerTrait.php - Demonstrates PHP traits
// Date created: 2025-12-23
// Created by: Michael Monteith

trait LoggerTrait
{
    public function log($msg)
    {
        echo "<p>Log: {$msg}</p>";
    }
}
