<?php

class FeatureFlagsTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \FeatureFlags\FeatureFlags
     */
    private $featureFlags = null;

    public function setUp()
    {
        $this->featureFlags = new \FeatureFlags\FeatureFlags(
            new \FeatureFlags\ArrayFlagConfiguration(array(
                'test_feature' => true,
                'test_indev_feature' => false,
            ))
        );
    }

    public function testIsActive()
    {
        $this->assertEquals(true, $this->featureFlags->isActive('test_feature'));
    }

    public function testIsInactive()
    {
        $this->assertEquals(true, $this->featureFlags->isInactive('test_indev_feature'));
    }

    public function testIsActiveOnFlag()
    {
        $this->assertEquals(true, $this->featureFlags->get('test_feature')->isActive('test_feature'));
    }

    public function testIsInactiveOnFlag()
    {
        $this->assertEquals(true, $this->featureFlags->get('test_indev_feature')->isInactive('test_indev_feature'));
    }

    public function testIsInGroup()
    {
        $this->assertEquals(true, $this->featureFlags->get('test_feature')->inGroup('ceo'));
    }

    public function testIsInGroupWithArrayAccess()
    {
        $this->assertEquals(true, $this->featureFlags->get('test_feature')->inGroup('rndB'));
    }

}
