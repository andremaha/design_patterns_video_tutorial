<?php

namespace OOPHP\Observer\Weather;

/**
 * Emulates the weather data transmition all the way from the North Pole.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class NortPoleStation
{
    public function receiveTransmission()
    {
        sleep(1);
        echo 'Receiving the data from our North Pole Weather Station 1 ';
        sleep(1);
        echo '.';
        sleep(1);
        echo '.';
        sleep(1);
        echo '.';
        sleep(1);
        echo ' DONE ' . "\n";

        $temperature = rand(-60, -20);
        $humidity = rand(30, 90);
        $pressure = rand(23, 60);

        return array($temperature, $humidity, $pressure);
    }
}
