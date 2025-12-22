<?php
// Animal.php - Base class demonstrating inheritance
// Date created: 2025-12-22
// Created by: Michael Monteith

class Animal
{
    public $name;

    public function speak()
    {
        return "{$this->name} makes a sound.";
    }
}
