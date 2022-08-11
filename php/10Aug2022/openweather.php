<?php
$OpenWeather = ['api_key' => ''];
$zip = "98109";
$lat = 23.7700761;
$lon = 90.442869;
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/weather?lat=" . $lat. "&lon=" . $lon;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
//print_r($api_url);
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);

