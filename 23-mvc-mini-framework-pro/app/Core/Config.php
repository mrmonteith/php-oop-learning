<?php
// Config.php - Config loader
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Config
{
    private $settings = [];

    public function __construct($file)
    {
        if (file_exists($file)) {
            $this->settings = include $file;
        }
    }

    public function get($key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }
}
