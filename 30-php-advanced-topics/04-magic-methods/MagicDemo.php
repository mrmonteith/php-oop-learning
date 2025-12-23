<?php
// MagicDemo.php - Demonstrates magic methods
// Date created: 2025-12-23
// Created by: Michael Monteith

class MagicDemo
{
    private $data = [];

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __call($name, $args)
    {
        return "Called method {$name} with args: " . implode(", ", $args);
    }
}
