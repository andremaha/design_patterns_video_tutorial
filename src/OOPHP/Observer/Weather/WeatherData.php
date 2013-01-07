<?php

namespace OOPHP\Observer\Weather;

/**
 * Central Data provider for our weather classes. It is also the implementation of the Subject interface.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class WeatherData implements Subject
{

    private $observers = array();
    private $temperature, $humidity, $pressure;


    public function registerObserver(Observer $o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o)
    {
        $i = array_keys($this->observers, $o);
        if (!empty($i)) {
            unset($this->observers[$i[0]]);
        }
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function mesurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMesurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->mesurementsChanged();
    }
}
