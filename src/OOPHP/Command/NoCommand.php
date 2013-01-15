<?php

namespace OOPHP\Command;

/**
 * Null Object
 *
 * @author      Andrey I. Esaulov <aesaulov@me.com>
 * @package     design_patterns_video_tutorial
 * @version     0.1
 */
class NoCommand implements Command
{
    public function execute() {
        echo "This should not happen - I am null object!\n";
    }
}
