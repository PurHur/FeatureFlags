<?php

class FeatureFlagsTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var \FeatureFlags\FeatureFlags
     */
    private $featureFlags = null;

    public function setUp() {
        $this->featureFlags = new \FeatureFlags\FeatureFlags(
            new \FeatureFlags\ArrayFlagConfiguration(array(
                'test_feature' => true,
                'test_indev_feature' => false,
            ))
        );
    }

    public function testIsActive() {
        $this->assertEquals(true, $this->featureFlags->isActive('test_feature'));
    }

    public function testIsInactive() {
        $this->assertEquals(true, $this->featureFlags->isInactive('test_indev_feature'));
    }
    
    // failing tests and some work to do!
    
    public function testIsInGroup() {
        $this->assertEquals(false, $this->featureFlags->get('test_feature')->inGroup('ceo'));
    }
    
    public function testIsInGroupWithArrayAccess() {
        $this->assertEquals(true, $this->featureFlags->get('test_feature')->inGroup('rndB'));
    }

}
