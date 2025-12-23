<?php
// example.php - Using traits
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "LoggerTrait.php";

class Service
{
    use LoggerTrait;

    public function run()
    {
        $this->log("Service is running...");
    }
}

$svc = new Service();
$svc->run();
