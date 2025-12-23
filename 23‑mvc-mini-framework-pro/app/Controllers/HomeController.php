<?php
// HomeController.php - Default controller for Pro MVC
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\User;

class HomeController extends BaseController
{
    public function index($request, $response)
    {
        $user = new User("Michael Monteith", "michael@example.com");
        return $this->view('home', ['user' => $user]);
    }
}
