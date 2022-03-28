<?php

Class Weakness {

    // Fields
    private $energyType;
    private $multiplier;

    // Constructor
    public function __construct($type, $multiplier){
        $this->energyType = new EnergyType($type, 0);
        $this->multiplier = $multiplier;
    }

    // Methods

    // Ophalen van de EnergyType van deze weakness
    public function getEnergyType(){
        return $this->energyType;
    }

    // Ophalen van de waarde waarmee de schade vermenigvuldig word vanwege de Weakness
    public function getMultiplier(){
        return $this->multiplier;
    }

}

?>