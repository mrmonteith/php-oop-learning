<?php
// example.php - cURL API demo
// Date created: 2025-12-23
// Created by: Michael Monteith

$ch = curl_init("https://jsonplaceholder.typicode.com/posts/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

echo "<h1>API Response</h1>";
echo "<p>Title: {$data['title']}</p>";
