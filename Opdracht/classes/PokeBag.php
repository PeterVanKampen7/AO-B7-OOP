<?php

Class PokeBag {

    // Fields
    private $bag = array();

    // Contructor
    public function addToBag($pokemon){
        if(count($this->bag) >= 10) return;
        $this->bag[$pokemon->getName()] = $pokemon;
    }

    // Methods

    // Pokemon uit de bag verwijderen aan de hand van de naam van de Pokemon
    public function removeFromBag($name){
        unset($this->bag[$name]);
    }

    // Ophalen van een Pokemon uit de bag aan de hand van de naam
    public function getFromBag($name){
        return $this->bag[$name];
    }

    // Ophalen van alle Pokemon in de bag.
    // Dit moet alleen de namen returnen, dus maak een nieuwe array aan 
    // Vul de nieuwe array met de namen van de Pokemons
    // Return de array met namen
    public function getBag(){
        $return = array();
        foreach($this->bag as $pokemon){
            array_push($return, $pokemon->getName());
        }
        return $return;
    }

    // Reset de array met Pokemons naar een nieuwe lege array
    public function clearBag(){
        $this->bag = array();
    }

}

?>