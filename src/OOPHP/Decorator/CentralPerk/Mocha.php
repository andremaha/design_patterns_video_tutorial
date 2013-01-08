<?php

namespace OOPHP\Decorator\CentralPerk;

/**
 * Concrete representation of the Decorator.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class Mocha extends CondimentDecorator
{

    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }

}
