<?php

namespace OOPHP\Command;

use OOPHP\Command\Receiver\Stereo;
use OOPHP\Command\Receiver\CD;

/**
 * Concrete implementation of the Command interface
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class StereoOnWithCDCommand implements Command
{
    private $stereo;
    private $cd;

    public function __construct(Stereo $stereo, CD $cd)
    {
        $this->stereo = $stereo;
        $this->cd = $cd;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCD($this->cd);
        $this->stereo->setVolume(11);
    }
}
