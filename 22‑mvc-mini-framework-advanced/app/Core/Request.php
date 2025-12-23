<?php
// Request.php - HTTP request abstraction
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Request
{
    public function getPath()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
