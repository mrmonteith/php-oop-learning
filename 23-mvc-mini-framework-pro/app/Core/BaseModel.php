<?php
// BaseModel.php - Base model with in-memory ORM simulation
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class BaseModel
{
    protected static $data = [];

    public static function all()
    {
        return static::$data;
    }

    public static function find($id)
    {
        return static::$data[$id] ?? null;
    }
}
