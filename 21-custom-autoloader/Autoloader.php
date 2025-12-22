<?php
// Autoloader.php - Custom class autoloader
// Date created: 2025-12-22
// Created by: Michael Monteith

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $path = str_replace("\\", "/", $class) . ".php";
            if (file_exists($path)) {
                require_once $path;
            }
        });
    }
}
