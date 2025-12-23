<?php
// FileLogger.php - Implements LoggerInterface
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once __DIR__ . "/LoggerInterface.php";

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents(__DIR__ . "/log.txt", $message . PHP_EOL, FILE_APPEND);
    }
}
