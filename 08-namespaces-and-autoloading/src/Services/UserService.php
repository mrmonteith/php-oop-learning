<?php
// UserService.php - Namespaced service class
// Date created: 2025-12-22
// Created by: Michael Monteith

namespace App\Services;

use App\Models\User;

class UserService
{
    public function greet(User $user)
    {
        return "Hello, {$user->name}!";
    }
}
