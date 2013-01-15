<?php

namespace OOPHP\Command\Remote;

use OOPHP\Command\Remote\Command;
use OOPHP\Command\Remote\GarageDoor;

/**
 * Garage door opener
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class GarageDoorUpCommand implements Command
{
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->up();
        $this->garageDoor->stop();
    }
}
