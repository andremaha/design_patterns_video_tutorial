<?php

namespace OOPHP\Decorator\CentralPerk;

/**
 * Concrete representation of the component part of the Decorator Design Pattern.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class Decaf extends Beverage
{

    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost()
    {
        return 1.05;
    }
}
