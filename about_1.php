<?php
// Moscow id - 524901  
$url = "http://api.openweathermap.org/data/2.5/weather?id=524901&lang=en&units=metric&APPID=343d400658e8dfe5a32cee3d5b519d5f";
$contents = file_get_contents($url);
$clima=json_decode($contents);
$temp_min=$clima->main->temp_min;
$temp_max=$clima->main->temp_max;
$icon=$clima->weather[0]->icon.".png";
//date and time today
$today = date("F j, Y, g:i a");
$cityname = $clima->name; 
echo $cityname . " - " .$today . "<br>";
echo "Temp Max: " . $temp_max ."&deg;C<br>";
echo "Temp Min: " . $temp_min ."&deg;C<br>";
?>