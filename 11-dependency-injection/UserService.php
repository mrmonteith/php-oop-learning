<?php
// UserService.php - Demonstrates constructor-based dependency injection
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Logger.php";

class UserService
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function register($username)
    {
        return $this->logger->write("User {$username} registered.");
    }
}
