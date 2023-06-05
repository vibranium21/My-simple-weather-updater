

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Weather In Durham,NC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h5>Weather Data:</h5>
<?php
    $api_key = "66f288d993da3c522897dd934449ab63"; // Replace with your OpenWeatherMap API key
    $city = "Durham"; // Replace with the desired city

    $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$api_key}";
    $data = file_get_contents($url);
    $weather_data = json_decode($data);
    $temp_fahrenheit = (($weather_data->main->temp - 273.15) * 9/5) + 32;

    echo "<h2>City: {$weather_data->name}</h2>";
    echo "<p>Temperature: {$temp_fahrenheit} F</p>";
    echo "<p>Description: {$weather_data->weather[0]->description}</p>";
?>
</body>
</html>
