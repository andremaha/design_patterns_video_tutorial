<?php

require __DIR__ . '/../vendor/autoload.php';
$sc = include __DIR__ . '/../container.php';
$sc->set('album', 'Srasdfasdf');

// Invoker
$remote = $sc->get('invoker.simpleRemote');
$complexRemote = $sc->get('invoker.complexRemote');

$remote->setCommand($sc->get('command.lightsOn'));
$remote->buttonPressed();

$remote->setCommand($sc->get('command.garageDoorUp'));
$remote->buttonPressed();

// And now the more complex

$complexRemote->setCommand(0, $sc->get('command.lightsOn'), $sc->get('command.lightsOff'));
$complexRemote->setCommand(1, $sc->get('command.stereoOn'), $sc->get('command.stereoOff'));

echo $complexRemote;

// To find the remote in the living room I switch on the light
$complexRemote->onButtonWasPushed(0);

// Turn on the old stereo with the Srgt. Peppers CD
$complexRemote->onButtonWasPushed(1);

// And switch off the light to create romantic mood =)
$complexRemote->offButtonWasPushed(0);