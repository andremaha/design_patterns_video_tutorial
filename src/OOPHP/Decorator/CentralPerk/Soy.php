<?php

namespace OOPHP\Decorator\CentralPerk;

/**
 * Concrete representation of the Decorator.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class SteamedMilk extends CondimentDecorator
{

    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy Milk';
    }

    public function cost()
    {
        return .15 + $this->beverage->cost();
    }

}
