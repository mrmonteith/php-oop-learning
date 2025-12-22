<?php
// BaseController.php - Base controller with view rendering
// Date created: 2025-12-22
// Created by: Michael Monteith

class BaseController
{
    protected function view($template, $data = [])
    {
        extract($data);

        ob_start();
        include __DIR__ . '/../Views/' . $template . '.php';
        $content = ob_get_clean();

        include __DIR__ . '/../Views/layout.php';
    }
}
