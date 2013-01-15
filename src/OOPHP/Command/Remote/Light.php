<?php

namespace OOPHP\Command\Remote;

/**
 * Light class that has no knowledge about the commands - its thing is switching the light on and off
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class Light
{

    private $light;

    public function on()
    {
        $this->light = true;
        echo "Light is on" . "\n";
    }

    public function off()
    {
        $this->light = false;
        echo "Light is off" . "\n";
    }
}
