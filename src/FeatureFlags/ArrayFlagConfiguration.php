<?php
namespace FeatureFlags;

class ArrayFlagConfiguration extends \ArrayObject implements FlagConfigurationInterface {

    /**
     * @var array $flagConfiguration
     */
    private $flagConfiguration;

    /**
     * ArrayFlagConfigurationInterface constructor.
     * @param array $flagConfiguration
     */
    public function __construct(array $flagConfiguration) {
        $this->flagConfiguration = $flagConfiguration;
    }

    public function offsetGet ( $offset ){
        if (!$this->offsetExists($offset)) {
            throw new MissingFlagException('Missing Feature Flag used!');
        }
        return $this->flagConfiguration[$offset];
    }
    public function offsetSet ( $offset , $value ) {
        $this->flagConfiguration[$offset] = $value;
    }
    public function offsetExists ( $offset ) {
        return isset($this->flagConfiguration[$offset]);
    }
}