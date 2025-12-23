<?php
// BaseModel.php - Simple ORM simulation
// Date created: 2025-12-23
// Created by: Michael Monteith

class BaseModel
{
    protected static $pdo;

    public static function setConnection($pdo)
    {
        static::$pdo = $pdo;
    }
}
