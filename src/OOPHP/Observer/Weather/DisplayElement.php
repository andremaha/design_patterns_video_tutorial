<?php

namespace OOPHP\Observer\Weather;

/**
 * Defines the display method to be impemented by all the classes that are to
 * display the WeatherStation data - current conditions, forecast, stats, custom iPhone display client.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
interface DisplayElement
{

    public function display();

}
