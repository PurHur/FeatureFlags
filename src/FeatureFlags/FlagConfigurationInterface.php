<?php

namespace FeatureFlags;

use IteratorAggregate;

interface FlagConfigurationInterface extends IteratorAggregate
{
    public getIterator ( void ) : Traversable
}