<?php

require '../vendor/autoload.php';
$sc = include __DIR__ . '/../container.php';

use OOPHP\Command\Remote\SimpleRemote;

// Invoker
$remote = new SimpleRemote();

$remote->setCommand($sc->get('command.lightsOn'));
$remote->buttonPressed();

$remote->setCommand($sc->get('command.garageDoorUp'));
$remote->buttonPressed();
