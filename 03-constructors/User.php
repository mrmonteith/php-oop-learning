<?php
// User.php - Demonstrates constructors in PHP classes
// Date created: 2025-12-22
// Created by: Michael Monteith

class User
{
    public $username;
    public $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getInfo()
    {
        return "Username: {$this->username}, Email: {$this->email}";
    }
}
