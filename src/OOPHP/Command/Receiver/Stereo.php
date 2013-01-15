<?php

namespace OOPHP\Command\Receiver;

use OOPHP\Command\Receiver\CD;

/**
 * Dependency: CD
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class Stereo
{
    private $cd;

    public function injectCD()
    {
        echo "Setting the CD with the album " . $this->cd->getAlbum() . "\n";
    }

    public function setCD(CD $cd)
    {
        $this->cd = $cd;
    }

    public function on()
    {
        echo get_class($this) . " is now on \n";
    }

    public function off()
    {
        $stringBuffer = "CD with the album " . $this->cd->getAlbum() . " is ejected\n";
        $stringBuffer .= get_class($this) . " is now off \n";

        echo $stringBuffer;
    }

    public function setVolume($volume)
    {
        echo "Volume is set to " . $volume . "\n";
    }

    public function getCD()
    {
        return $this->cd;
    }
}
