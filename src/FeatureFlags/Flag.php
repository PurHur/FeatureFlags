<?php

namespace FeatureFlags;

class Flag implements FlagInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $value;

    /**
     * Flag constructor.
     * @param string $name
     * @param bool $value
     */
    public function __construct(string $name,bool $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @param string $group
     * @return bool
     */
    public function inGroup(string $group): bool
    {
        return $this->value;
    }


    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return (bool)$this->value;
    }

    /**
     * @return bool
     */
    public function isInactive(): bool
    {
        return !(bool)$this->value;
    }
}
