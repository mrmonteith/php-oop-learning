<?php
// Car.php - Demonstrates properties and methods in a class
// Date created: 2025-12-22
// Created by: Michael Monteith

class Car
{
    public $make;
    public $model;
    public $year;

    public function getDescription()
    {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
