<?php
// Autoloader.php - PSR-4 style autoloader
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([self::class, 'load']);
    }

    public static function load($class)
    {
        $prefix = 'App\\';
        $baseDir = __DIR__ . '/../';

        if (str_starts_with($class, $prefix)) {
            $relative = substr($class, strlen($prefix));
            $path = $baseDir . str_replace('\\', '/', $relative) . '.php';

            if (file_exists($path)) {
                require_once $path;
            }
        }
    }
}
