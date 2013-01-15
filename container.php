<?php
/**
 * Dependency Injection Container
 */

use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$sc = new ContainerBuilder();

// Params
$sc->setParameter('album', 'NONE');

// Receivers
$sc->register('receiver.light', 'OOPHP\Command\Receiver\Light');
$sc->register('receiver.garageDoor', 'OOPHP\Command\Receiver\GarageDoor');
$sc->register('receiver.stereo', 'OOPHP\Command\Receiver\Stereo');
$sc->register('receiver.cd', 'OOPHP\Command\Receiver\CD')
    ->setArguments(array('%album%'));

// Commands
$sc->register('command.lightsOn', 'OOPHP\Command\LightsOnCommand')
    ->setArguments(array(new Reference('receiver.light')));
$sc->register('command.lightsOff', 'OOPHP\Command\LightsOffCommand')
    ->setArguments(array(new Reference('receiver.light')));
$sc->register('command.garageDoorUp', 'OOPHP\Command\GarageDoorUpCommand')
    ->setArguments(array(new Reference('receiver.garageDoor')));
$sc->register('command.stereoOn', 'OOPHP\Command\StereoOnWithCDCommand')
    ->setArguments(array(new Reference('receiver.stereo'), new Reference('receiver.cd')));
$sc->register('command.stereoOff', 'OOPHP\Command\StereoOffWithCDCommand')
    ->setArguments(array(new Reference('receiver.stereo'), new Reference('receiver.cd')));

// Invokers
$sc->register('invoker.simpleRemote', 'OOPHP\Command\Invoker\SimpleRemote');
$sc->register('invoker.complexRemote', 'OOPHP\Command\Invoker\RemoteControl');

return $sc;