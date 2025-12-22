<?php
// Notifier.php - Base notifier class for Decorator pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

class Notifier
{
    public function send($message)
    {
        return "Sending notification: {$message}";
    }
}
