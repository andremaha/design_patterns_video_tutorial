<?php

require '../vendor/autoload.php';
$sc = include __DIR__ . '/../container.php';

// Invoker
$remote = $sc->get('invoker.simpleRemote');
$complexRemote = $sc->get('invoker.complexRemote');

$remote->setCommand($sc->get('command.lightsOn'));
$remote->buttonPressed();

$remote->setCommand($sc->get('command.garageDoorUp'));
$remote->buttonPressed();

echo $complexRemote;

$complexRemote->setCommand(0, $sc->get('command.lightsOn'), $sc->get('command.lightsOff'));

$complexRemote->onButtonWasPushed(0);