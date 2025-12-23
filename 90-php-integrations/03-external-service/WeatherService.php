<?php
// WeatherService.php - Example external service wrapper
// Date created: 2025-12-23
// Created by: Michael Monteith

class WeatherService
{
    private $apiUrl = "https://api.open-meteo.com/v1/forecast";

    public function getWeather($lat, $lon)
    {
        $url = "{$this->apiUrl}?latitude={$lat}&longitude={$lon}&current_weather=true";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
