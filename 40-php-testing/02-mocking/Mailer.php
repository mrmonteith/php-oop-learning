<?php
// Mailer.php - Example dependency for mocking
// Date created: 2025-12-23
// Created by: Michael Monteith

class Mailer
{
    public function send($to, $msg)
    {
        return "Sent '{$msg}' to {$to}";
    }
}
