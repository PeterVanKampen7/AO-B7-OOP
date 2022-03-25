<?php

Class Attack {

    // Fields
    private $name;
    private $damage;

    // Contructor
    public function __construct($name, $damage) {
        $this->name = $name;
        $this->damage = $damage;
    }

    // Ophalen van de naam van deze Attack
    public function getName(){
        return $this->name;
    }

    // Ophalen van de schade die deze attack doet
    public function getDamage(){
        return $this->damage;
    }

}

?>