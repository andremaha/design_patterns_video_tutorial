<?php

namespace OOPHP\Command;

use OOPHP\Command\Receiver\Light;

/**
 * Concrete Command implementation for "executing" the $light->off()
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.2
 */
class LightsOffCommand implements Command
{

    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }
}
