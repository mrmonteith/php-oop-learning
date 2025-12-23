<?php
// User.php - Example model for Advanced MVC
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Models;

use App\Core\BaseModel;

class User extends BaseModel
{
    public $name;
    public $email;

    public function __construct($name = "Guest", $email = "guest@example.com")
    {
        $this->name = $name;
        $this->email = $email;
    }
}
