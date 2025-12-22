<?php
// index.php - Front controller for mini MVC
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "../app/Controllers/HomeController.php";

$controller = new HomeController();
echo $controller->index();
