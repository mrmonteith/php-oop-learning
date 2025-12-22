<?php
// User.php - Example model for Lite MVC
// Date created: 2025-12-22
// Created by: Michael Monteith

class User
{
    public $name;
    public $email;

    public function __construct($name = "Guest", $email = "guest@example.com")
    {
        $this->name = $name;
        $this->email = $email;
    }
}
