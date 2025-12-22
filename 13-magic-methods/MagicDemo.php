<?php
// MagicDemo.php - Demonstrates PHP magic methods
// Date created: 2025-12-22
// Created by: Michael Monteith

class MagicDemo
{
    private $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __toString()
    {
        return "MagicDemo object";
    }
}
