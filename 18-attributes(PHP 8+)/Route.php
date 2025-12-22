<?php
// Route.php - Custom attribute example
// Date created: 2025-12-22
// Created by: Michael Monteith

#[Attribute]
class Route
{
    public function __construct(public string $path) {}
}
