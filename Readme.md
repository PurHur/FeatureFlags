[![CircleCI](https://circleci.com/gh/PurHur/FeatureFlags/tree/master.svg?style=svg)](https://circleci.com/gh/PurHur/FeatureFlags/tree/master)

# Feature Flags

This component provides some FeatureFlags classes

## Usage

To see the current working version you should probably look into the tests found here:
[FeatureFlagsTest](https://github.com/PurHur/FeatureFlags/blob/master/tests/Unit/FeatureFlagsTest.php)



```
$featureFlags = new \FeatureFlags\FeatureFlags(
    new \FeatureFlags\ArrayFlagConfiguration(array(
        'test_feature' => true,
        'test_indev_feature' => false,
    ))
);
if ($featureFlags->isActive('test_feature')) {
    ...
}
    
```
