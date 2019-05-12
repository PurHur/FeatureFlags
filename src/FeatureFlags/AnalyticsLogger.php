<?php

namespace FeatureFlags;

class AnalyticsLogger implements LoggerInterface
{

    /**
     * @var array
     */
    private $data = [];

    public function __construct()
    {
        register_shutdown_function(function(){
            $this->sendData();
        });
    }

    /**
     * @param Flag $flag
     */
    public function log(Flag $flag) {
        $this->data[$flag][] = $flag->isActive();
    }

    /**
     * Sends the data to analytics...
     */
    private function sendData() {
        // @todo
    }
}
