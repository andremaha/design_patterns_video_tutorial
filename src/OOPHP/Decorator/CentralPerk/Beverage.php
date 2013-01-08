<?php

namespace OOPHP\Decorator\CentralPerk;

/**
 * Abstract Component - the essential part of the Decorator Pattern.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
abstract class Beverage
{
    public $description = 'Unknown Beverage';

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();
}
