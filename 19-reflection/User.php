<?php
// User.php - Class for reflection example
// Date created: 2025-12-22
// Created by: Michael Monteith

class User
{
    public $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
