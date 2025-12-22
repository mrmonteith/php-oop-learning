<?php
// User.php - Example model for MVC mini framework
// Date created: 2025-12-22
// Created by: Michael Monteith

class User
{
    public $name;
    public $email;

    public function __construct($name = "Michael", $email = "michael@example.com")
    {
        $this->name = $name;
        $this->email = $email;
    }
}
