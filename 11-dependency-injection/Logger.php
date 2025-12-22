<?php
// Logger.php - Simple logger class for DI example
// Date created: 2025-12-22
// Created by: Michael Monteith

class Logger
{
    public function write($message)
    {
        return "Log entry: {$message}";
    }
}
