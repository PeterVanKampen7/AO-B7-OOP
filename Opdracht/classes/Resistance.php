<?php

Class Resistance {

    // Fields
    private $energyType;
    private $value;

    // Constructor
    public function __construct($energyType, $value){
        $this->energyType = $energyType;
        $this->value = $value;
    }

    // Methods

    // Ophalen welk type energy deze resistance voor is
    public function getEnergyType(){
        return $this->energyType;
    }

    // Ophalen van de value die aangeeft hoeveel damage verminderd word door de resistance
    public function getValue(){
        return $this->value;
    }
}