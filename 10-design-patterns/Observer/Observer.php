<?php
// Observer.php - Demonstrates the Observer design pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

interface Observer
{
    public function update($message);
}

class User implements Observer
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($message)
    {
        return "{$this->name} received notification: {$message}";
    }
}

class NotificationCenter
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify($message)
    {
        $output = "";
        foreach ($this->observers as $observer) {
            $output .= $observer->update($message) . "<br>";
        }
        return $output;
    }
}
