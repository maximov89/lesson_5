<?php
error_reporting(E_ALL);
header ("Content-Type: text/html; charset=UTF-8");
$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=524901&lang=en&units=metric&APPID=343d400658e8dfe5a32cee3d5b519d5f');
$data = json_decode($content, true);
echo "Город: {$data['name']}";
echo '<br/>';
echo "температура воздуха: {$data['main']['temp']} ºС";
echo '<br/>';
echo "влажность воздуха: {$data['main']['humidity']} %";
echo '<br/>';
echo "атмосферное давление: {$data['main']['pressure']} гПа";
echo '<br/>';
echo "направление ветра: {$data['wind']['deg']} º";
echo '<br/>';
echo "скорость ветра: {$data['wind']['speed']} м/с";
