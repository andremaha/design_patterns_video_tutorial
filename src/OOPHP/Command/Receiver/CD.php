<?php

namespace OOPHP\Command\Receiver;

/**
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class CD
{
    private $album;

    public function __construct()
    {
    }

    public function setAlbum($album)
    {
        $this->album = $album;
    }

    public function getAlbum()
    {
        return $this->album;
    }
}
