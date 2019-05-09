<?php
namespace FeatureFlags;
class Flag implements FlagInterface {
   private $name;
   
   private $value;
   
   public function __construct(string $name, $value) {
    $this->name = $name;
      $this->value = $value;
   }
   
   public function inGroup(string $group): bool {
    return $this->value;
   }
   
       public function __toString()
    {
        return $this->value;
    }
}
