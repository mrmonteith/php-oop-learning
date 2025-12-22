<?php
// PrinterAdapter.php - Adapter to make LegacyPrinter compatible
// Date created: 2025-12-22
// Created by: Michael Monteith

require_once "LegacyPrinter.php";

class PrinterAdapter
{
    private $legacy;

    public function __construct(LegacyPrinter $legacy)
    {
        $this->legacy = $legacy;
    }

    public function print($text)
    {
        return $this->legacy->oldPrint($text);
    }
}
