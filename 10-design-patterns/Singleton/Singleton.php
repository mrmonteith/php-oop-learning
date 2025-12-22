<?php
// Singleton.php - Demonstrates the Singleton design pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

class Singleton
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function sayHello()
    {
        return "Hello from the Singleton instance.";
    }
}
