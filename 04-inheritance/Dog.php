<?php
// Dog.php - Child class extending Animal
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Animal.php";

class Dog extends Animal
{
    public function speak()
    {
        return "{$this->name} barks.";
    }
}
