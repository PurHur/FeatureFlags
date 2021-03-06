<?php

namespace FeatureFlags;

class FeatureFlags
{

    /**
     * @var FlagConfigurationInterface
     */
    private $flagConfiguration;

    /**
     * @var
     */
    private $logger;

    /**
     * @param FlagConfigurationInterface $flagConfiguration
     */
    public function __construct(FlagConfigurationInterface $flagConfiguration)
    {
        $this->flagConfiguration = $flagConfiguration;
    }

    /**
     * @param string $flag
     * @return bool
     */
    public function isActive(string $flag): bool
    {
        return $this->flagConfiguration[$flag]->isActive();
    }

    /**
     * @param string $flag
     * @return bool
     */
    public function isInactive(string $flag): bool
    {
        return $this->flagConfiguration[$flag]->isInactive();
    }

    /**
     * @param string $flag
     * @return FlagInterface
     */
    public function get(string $flag): FlagInterface
    {
        return $this->flagConfiguration[$flag];
    }

    public function setLogger(LoggerInterface $logger) {
        $this->logger = $logger;
    }

}
