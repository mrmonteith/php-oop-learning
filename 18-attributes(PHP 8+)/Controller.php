<?php
// Controller.php - Uses custom Route attribute
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "Route.php";

class Controller
{
    #[Route('/home')]
    public function home()
    {
        return "Home page";
    }
}
