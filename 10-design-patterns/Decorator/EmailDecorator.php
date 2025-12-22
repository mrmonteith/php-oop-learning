<?php
// EmailDecorator.php - Adds email functionality to Notifier
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Notifier.php";

class EmailDecorator extends Notifier
{
    private $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send($message)
    {
        $base = $this->notifier->send($message);
        return $base . " | Email sent.";
    }
}
