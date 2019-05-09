<?php
namespace FeatureFlags;
class Flag {
   private $name;
   
   public function __construct(string $name) {
    $this->name = $name;
   }
   
   public function inGroup(string $group): bool {
    return true;
   }
   
       public function __toString()
    {
        return true;
    }
}
