<?php

namespace FeatureFlags;


class FeatureFlags {

    /**
     * @var FlagConfigurationInterface
     */
    private $flagConfiguration;

    /**
     * @param FlagConfigurationInterface $flagConfiguration
     */
    public function __construct(FlagConfigurationInterface $flagConfiguration) {
        $this->flagConfiguration = $flagConfiguration;
    }

    /**
     * @param string $flag
     * @return bool
     */
    public function isActive(string $flag): bool {
        return (bool)$this->flagConfiguration[$flag];
    }

    /**
     * @param string $flag
     * @return bool
     */
    public function isInactive(string $flag): bool {
        return !(bool)$this->flagConfiguration[$flag];
    }

    /**
     * @param string $flag
     * @return FlagConfigurationInterface
     */
    public function getFlagData(string $flag): FlagConfigurationInterface {
        return $this->flagConfiguration[$flag];
    }

}
