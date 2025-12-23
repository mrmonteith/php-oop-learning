<?php
// UserService.php - Service that depends on Mailer
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "Mailer.php";

class UserService
{
    private $mailer;

    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email)
    {
        return $this->mailer->send($email, "Welcome!");
    }
}
