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
        return $this->beverage->getDescription() . ', Steamed Milk';
    }

    public function cost()
    {
        return .10 + $this->beverage->cost();
    }

}
