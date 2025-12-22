<?php
// Person.php - Basic class demonstrating objects in PHP
// Date created: 2025-12-22
// Created by: Michael Monteith

class Person
{
    public $name;
    public $age;

    public function sayHello()
    {
        return "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}
