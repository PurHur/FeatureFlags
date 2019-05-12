<?php

namespace FeatureFlags;

interface LoggerInterface
{
    /**
     * @param Flag $flag
     * @return mixed
     */
    public function log(Flag $flag);
}