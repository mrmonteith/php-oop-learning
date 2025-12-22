<?php
// Factory.php - Demonstrates the Factory design pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

class Car
{
    public function drive()
    {
        return "Driving a car.";
    }
}

class Truck
{
    public function drive()
    {
        return "Driving a truck.";
    }
}

class VehicleFactory
{
    public static function create($type)
    {
        return match ($type) {
            'car' => new Car(),
            'truck' => new Truck(),
            default => throw new Exception("Unknown vehicle type: {$type}")
        };
    }
}
