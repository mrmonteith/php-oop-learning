<?php
// Container.php - Simple service container
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Container
{
    private $services = [];

    public function set($key, $service)
    {
        $this->services[$key] = $service;
    }

    public function get($key)
    {
        return $this->services[$key] ?? null;
    }
}
