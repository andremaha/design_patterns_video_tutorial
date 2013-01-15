<?php

namespace OOPHP\Command\Invoker;

use OOPHP\Command\Command;
use OOPHP\Command\NoCommand;

/**
 * A bit more complex concrete implementation of the Command Interface.
 * Remote Control has 7 slots, each of them can be programmed with the on/off switch.
 * The programming is done with setCommand(), when the slot is not programmed it automatically
 * gets null object of NoCommand.
 * On/Off buttons will envoke the execute() methods on the assigned commands.
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class RemoteControl
{
    private $onCommands = array();
    private $offCommands = array();
    private $noCommand;

    public function __construct()
    {
        $this->noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $this->noCommand;
            $this->offCommands[$i] = $this->noCommand;
        }
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $stringBuffer = "\n-------------------- Remote Control ----------------------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $stringBuffer .= "[slot " . $i . "] " . get_class($this->onCommands[$i]) . "\t\t\t" . get_class($this->offCommands[$i]) . "\n";
        }
        $stringBuffer .= "\n---------------------------------------------------------\n";
        return $stringBuffer;
    }

}
