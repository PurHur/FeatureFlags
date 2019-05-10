<?php

namespace FeatureFlags;

use ArrayObject;

class ArrayFlagConfiguration extends ArrayObject implements FlagConfigurationInterface
{

    /**
     * @var array $flagConfiguration
     */
    private $flagConfiguration;

    /**
     * ArrayFlagConfigurationInterface constructor.
     * @param array $flagConfiguration
     */
    public function __construct(array $flagConfiguration)
    {
        $this->flagConfiguration = [];
        foreach ($flagConfiguration as $flag => $value) {
            $this->flagConfiguration[$flag] = new Flag($flag, $value);
        }
    }

    /*
     * ArrayObject implementation
     */

    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new MissingFlagException('Missing Feature Flag used!');
        }
        return $this->flagConfiguration[$offset];
    }

    public function offsetExists($offset)
    {
        return isset($this->flagConfiguration[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        $this->flagConfiguration[$offset] = $value;
    }

    /**
     * @return array|\ArrayIterator|\Traversable
     */
    public function getIterator () {
        return $this->flagConfiguration;
    }

}
