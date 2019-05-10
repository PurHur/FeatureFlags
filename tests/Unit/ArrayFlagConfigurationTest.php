<?php

class ArrayFlagConfigurationTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \FeatureFlags\ArrayFlagConfigurationInterface
     */
    private $flagConfiguration = null;

    public function setUp()
    {
        $this->flagConfiguration = new \FeatureFlags\ArrayFlagConfiguration(array(
            'test_feature' => true,
        ));
    }

    public function testConfigurationAccess()
    {
        $this->assertInstanceOf(\FeatureFlags\Flag::class, $this->flagConfiguration['test_feature']);
    }

    public function testNonExistingConfigurationAccess()
    {
        $this->expectException(\FeatureFlags\MissingFlagException::class);

        $this->assertInstanceOf(\FeatureFlags\Flag::class, $this->flagConfiguration['test_feature_not_existing']);
    }

}
