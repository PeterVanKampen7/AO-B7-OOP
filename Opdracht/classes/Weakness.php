<?php

Class Weakness {

    private $energyType;
    private $multiplier;

    public function __construct($type, $multiplier){
        $this->energyType = $type;
        $this->multiplier = $multiplier;
    }

    public function getEnergyType(){
        return $this->energyType;
    }

    public function getMultiplier(){
        return $this->multiplier;
    }

}

?>