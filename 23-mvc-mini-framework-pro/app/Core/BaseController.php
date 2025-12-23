<?php
// BaseController.php - Base controller with DI and view rendering
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class BaseController
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function view($template, $data = [])
    {
        extract($data);

        ob_start();
        include __DIR__ . '/../Views/' . $template . '.php';
        $content = ob_get_clean();

        include __DIR__ . '/../Views/layout.php';
    }
}
