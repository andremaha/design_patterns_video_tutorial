<?php
namespace OOPHP\Command\Remote;

/**
 * The Invoker of the Command Design Pattern. This sets the commands and calls the execute() method
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class SimpleRemote
{

    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function buttonPressed()
    {
        $this->command->execute();
    }

}
