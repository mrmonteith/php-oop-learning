<?php
// User.php - Namespaced model class
// Date created: 2025-12-22
// Created by: Michael Monteith

namespace App\Models;

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
