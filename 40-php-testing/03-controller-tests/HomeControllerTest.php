<?php
// HomeControllerTest.php - PHPUnit test for controller
// Date created: 2025-12-23
// Created by: Michael Monteith

use PHPUnit\Framework\TestCase;
require_once "HomeController.php";

class HomeControllerTest extends TestCase
{
    public function testIndexReturnsMessage()
    {
        $controller = new HomeController();
        $this->assertEquals("Hello from HomeController", $controller->index());
    }
}
