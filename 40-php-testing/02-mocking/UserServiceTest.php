<?php
// UserServiceTest.php - PHPUnit test with mocking
// Date created: 2025-12-23
// Created by: Michael Monteith

use PHPUnit\Framework\TestCase;
require_once "UserService.php";

class UserServiceTest extends TestCase
{
    public function testRegisterSendsEmail()
    {
        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->method('send')->willReturn("Mocked send");

        $service = new UserService($mockMailer);
        $result = $service->register("test@example.com");

        $this->assertEquals("Mocked send", $result);
    }
}
