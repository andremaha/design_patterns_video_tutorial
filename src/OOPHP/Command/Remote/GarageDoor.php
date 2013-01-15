<?php

namespace OOPHP\Command\Remote;

/**
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class GarageDoor
{
    public function up()
    {
        echo "The garage door is moving up \n";
    }

    public function down()
    {
        echo "The garage door is moving down \n";
    }

    public function stop()
    {
        echo "The garage door stopped moving \n";
    }
}
