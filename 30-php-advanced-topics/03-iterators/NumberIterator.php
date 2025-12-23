<?php
// NumberIterator.php - Custom iterator
// Date created: 2025-12-23
// Created by: Michael Monteith

class NumberIterator implements Iterator
{
    private $position = 0;
    private $numbers = [10, 20, 30];

    public function rewind() { $this->position = 0; }
    public function current() { return $this->numbers[$this->position]; }
    public function key() { return $this->position; }
    public function next() { ++$this->position; }
    public function valid() { return isset($this->numbers[$this->position]); }
}
