<?php

require '../vendor/autoload.php';

use OOPHP\Observer\Weather\WeatherData;
use OOPHP\Observer\Weather\CurrentConditionsDisplay;
use OOPHP\Observer\Weather\NortPoleStation;

$weatherData = new WeatherData();
$currentConditions = new CurrentConditionsDisplay($weatherData);
$northStation = new NortPoleStation();


// Data change 1
$data = $northStation->receiveTransmission();
$weatherData->setMesurements($data[0], $data[1], $data[2]);

// Data change 2
$data = $northStation->receiveTransmission();
$weatherData->setMesurements($data[0], $data[1], $data[2]);

// Data change 3
$data = $northStation->receiveTransmission();
$weatherData->setMesurements($data[0], $data[1], $data[2]);