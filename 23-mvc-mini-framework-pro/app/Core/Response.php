<?php
// Response.php - HTTP response abstraction
// Date created: 2025-12-23
// Created by: Michael Monteith

namespace App\Core;

class Response
{
    private $content;

    public function setContent($content)
    {
        $this->content = $content;
        return $this->content;
    }
}
