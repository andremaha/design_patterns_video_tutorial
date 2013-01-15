<?php

namespace OOPHP\Command;

use OOPHP\Command\Receiver\GarageDoor;

/**
 * Garage door opener
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.2
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
