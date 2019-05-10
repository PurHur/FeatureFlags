<?php

namespace FeatureFlags;

interface FlagInterface
{
    /**
     * @param string $group
     * @return bool
     */
    public function inGroup(string $group): bool;


    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @return bool
     */
    public function isInactive(): bool;
}
