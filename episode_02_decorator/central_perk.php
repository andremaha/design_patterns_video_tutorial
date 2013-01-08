<?php

require '../vendor/autoload.php';

use OOPHP\Decorator\CentralPerk\Espresso;
use OOPHP\Decorator\CentralPerk\DarkRoast;
use OOPHP\Decorator\CentralPerk\SteamedMilk;
use OOPHP\Decorator\CentralPerk\Whip;

// Ross always orders an espresso. Straight
$espresso = new Espresso();
echo "Ross ordered: \t" . $espresso->getDescription() . ' $' . $espresso->cost() . "\n";

// Fibie, on the other hand, loves all the additional stuff
// So he orders the Dark Roast with Steamed Milk and double Whip

// Guy at the coffee machine first pours some Dark Roast
$darkRoast = new DarkRoast();

// Then he adds some Steamed Milk
$darkRoast = new SteamedMilk($darkRoast);

// And adds whip twice
$darkRoast = new Whip($darkRoast);
$darkRoast = new Whip($darkRoast);

// Coffee is ready, time to pay
echo "Fibie ordered: \t" . $darkRoast->getDescription() . ' $' . $darkRoast->cost() . "\n";