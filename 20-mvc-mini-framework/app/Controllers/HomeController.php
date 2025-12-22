<?php
// HomeController.php - Basic MVC controller
// Date created: 2025-12-22
// Created by: Michael Monteith

class HomeController
{
    public function index()
    {
        ob_start();
        include "../app/Views/home.php";
        return ob_get_clean();
    }
}
