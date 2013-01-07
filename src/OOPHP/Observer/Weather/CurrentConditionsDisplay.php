<?php

namespace OOPHP\Observer\Weather;

/**
* Show the current conditions when those get changed in the WeatherData.
*
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
*/
class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature, $humidity, $pressure, $weatherData;


    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "Current conditions: " . $this->temperature . "C degrees and " . $this->humidity . "% humdity \n";
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

}
