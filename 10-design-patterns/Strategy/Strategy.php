<?php
// Strategy.php - Demonstrates the Strategy design pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

interface PaymentStrategy
{
    public function pay($amount);
}

class CreditCardPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        return "Paid \${$amount} using Credit Card.";
    }
}

class PayPalPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        return "Paid \${$amount} using PayPal.";
    }
}

class Checkout
{
    private $strategy;

    public function __construct(PaymentStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function process($amount)
    {
        return $this->strategy->pay($amount);
    }
}
