<?php

Class EnergyType {

    // Fields
    private $type;
    private $value;

    // Contructor
    public function __construct($type, $value){
        $this->type = $type;
        $this->value = $value;
    }

    // Methods

    // Ophalen van het type van deze energy type
    public function getType(){
        return $this->type;
    }

    // Deze value word verder nergens gebruikt, maar was wel gespecifeerd als voorwaarde in de opdracht
    // Ophalen van de value van deze energy type
    public function getValue(){
        return $this->value;
    }

}

?>