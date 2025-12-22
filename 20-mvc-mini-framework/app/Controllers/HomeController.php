<?php
// HomeController.php - Basic MVC controller
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "../app/Models/User.php";

class HomeController
{
    public function index()
    {
        // Create a model instance
        $user = new User("Michael Monteith", "michael@example.com");

        // Make $user available to the view
        $data = ['user' => $user];

        // Render the view
        ob_start();
        extract($data);
        include "../app/Views/home.php";
        return ob_get_clean();
    }
}
