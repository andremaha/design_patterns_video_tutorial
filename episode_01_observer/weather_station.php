<?php

require '../vendor/autoload.php';

use OOPHP\Observer\Weather\WeatherData;
use OOPHP\Observer\Weather\CurrentConditionsDisplay;

$weatherData = new WeatherData();
$currentConditions = new CurrentConditionsDisplay($weatherData);

// Data change 1
$weatherData->setMesurements(25, 75, 23);

sleep(1);
echo 'Receiving the data from our North Pole Weather Station 1';
sleep(1);
echo '.';
sleep(1);
echo '.';
sleep(1);
echo '.'. "\n";


// Data change 2
$weatherData->setMesurements(12, 80, 23);

sleep(1);
echo 'Receiving the data from our North Pole Weather Station 2';
sleep(1);
echo '.';
sleep(1);
echo '.';
sleep(1);
echo '.'. "\n";


// Data change 3
$weatherData->setMesurements(10, 90, 23);