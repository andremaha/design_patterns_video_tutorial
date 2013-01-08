<?php

namespace OOPHP\Observer\Weather;

/**
 * Calculate and display the forecast information judging by the changed weather conditions.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
*/
class ForecastDisplay implements Observer, DisplayElement
{
    private $oldTemperature, $temperature, $humidity, $pressure, $weatherData;


    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        if ($this->temperature > $this->oldTemperature) {
            echo "Forecast: \t\t It's getting warmer! \n";
        } else {
            echo "Forecast: \t\t It's getting colder! \n";
        }
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
        $this->oldTemperature = $temp;
    }

}
