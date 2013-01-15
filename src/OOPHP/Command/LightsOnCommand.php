<?php

namespace OOPHP\Command;

use OOPHP\Command\Receiver\Light;

/**
 * Concrete Command implementation for "executing" the $light->on()
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.2
 */
class LightsOnCommand implements Command
{

    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}
