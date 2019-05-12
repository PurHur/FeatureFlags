<?php

namespace FeatureFlags;

class EchoLogger implements LoggerInterface
{
    /**
     * @param Flag $flag
     */
    public function log(Flag $flag) {
        echo $flag.' - '.$flag->isActive();
    }
}
