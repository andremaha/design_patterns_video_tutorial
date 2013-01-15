<?php
/**
 * Dependency Injection Container
 */

use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$sc = new ContainerBuilder();

// Receivers
$sc->register('receiver.light', 'OOPHP\Command\Remote\Light');
$sc->register('receiver.garageDoor', 'OOPHP\Command\Remote\GarageDoor');

// Commands
$sc->register('command.lightsOn', 'OOPHP\Command\Remote\LightsOnCommand')
    ->setArguments(array(new Reference('receiver.light')));
$sc->register('command.garageDoorUp', 'OOPHP\Command\Remote\GarageDoorUpCommand')
    ->setArguments(array(new Reference('receiver.garageDoor')));

return $sc;