<?php
// UserRepository.php - Simulated repository pattern
// Date created: 2025-12-22
// Created by: Michael Monteith

class UserRepository
{
    private $users = [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob']
    ];

    public function find($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        return null;
    }
}
