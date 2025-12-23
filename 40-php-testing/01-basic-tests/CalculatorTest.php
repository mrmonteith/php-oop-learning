<?php
// CalculatorTest.php - PHPUnit test for Calculator
// Date created: 2025-12-23
// Created by: Michael Monteith

use PHPUnit\Framework\TestCase;
require_once "Calculator.php";

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3, 2));
    }
}
