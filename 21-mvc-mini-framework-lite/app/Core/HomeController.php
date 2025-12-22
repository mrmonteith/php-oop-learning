<?php
// HomeController.php - Default controller for Lite MVC
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once __DIR__ . '/../Models/User.php';

class HomeController extends BaseController
{
    public function index()
    {
        $user = new User("Michael Monteith", "michael@example.com");

        return $this->view('home', ['user' => $user]);
    }
}
