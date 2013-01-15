<?php
/**
 * Dependency Injection Container
 */

use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$sc = new ContainerBuilder();

// Receivers
$sc->register('receiver.light', 'OOPHP\Command\Receiver\Light');
$sc->register('receiver.garageDoor', 'OOPHP\Command\Receiver\GarageDoor');

// Commands
$sc->register('command.lightsOn', 'OOPHP\Command\LightsOnCommand')
    ->setArguments(array(new Reference('receiver.light')));
$sc->register('command.lightsOff', 'OOPHP\Command\LightsOffCommand')
    ->setArguments(array(new Reference('receiver.light')));
$sc->register('command.garageDoorUp', 'OOPHP\Command\GarageDoorUpCommand')
    ->setArguments(array(new Reference('receiver.garageDoor')));

// Invokers
$sc->register('invoker.simpleRemote', 'OOPHP\Command\Invoker\SimpleRemote');
$sc->register('invoker.complexRemote', 'OOPHP\Command\Invoker\RemoteControl');

return $sc;