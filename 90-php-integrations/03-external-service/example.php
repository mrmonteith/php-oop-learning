<?php
// example.php - Using WeatherService
// Date created: 2025-12-23
// Created by: Michael Monteith

require_once "WeatherService.php";

$service = new WeatherService();
$data = $service->getWeather(35.6, -77.4); // Greenville, NC

echo "<h1>Weather Example</h1>";
echo "<p>Temperature: {$data['current_weather']['temperature']}°C</p>";
