<?php
// FileLogger.php - Implements LoggerInterface
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "LoggerInterface.php";

class FileLogger implements LoggerInterface
{
    public function log($message)
    {
        return "Logging to file: {$message}";
    }
}
