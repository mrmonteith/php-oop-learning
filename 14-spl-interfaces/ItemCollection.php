<?php
// ItemCollection.php - Demonstrates SPL interfaces
// Date created: 2025-12-22
// Created by: Michael Monteith

class ItemCollection implements Iterator, Countable
{
    private $items = [];
    private $position = 0;

    public function __construct($items)
    {
        $this->items = array_values($items);
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->items[$this->position]);
    }

    public function count()
    {
        return count($this->items);
    }
}
