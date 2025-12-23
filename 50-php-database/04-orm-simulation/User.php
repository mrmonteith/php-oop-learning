<?php
// User.php - Example model using BaseModel
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "BaseModel.php";

class User extends BaseModel
{
    public $id;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function save()
    {
        $stmt = static::$pdo->prepare("INSERT INTO users (name) VALUES (:name)");
        $stmt->execute([':name' => $this->name]);
        $this->id = static::$pdo->lastInsertId();
    }

    public static function all()
    {
        $stmt = static::$pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
