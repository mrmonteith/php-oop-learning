<?php
// Circle.php - Concrete class extending Shape
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Shape.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * ($this->radius ** 2);
    }
}
