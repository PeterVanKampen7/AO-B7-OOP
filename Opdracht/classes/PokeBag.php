<?php

Class PokeBag {

    private $bag = array();

    public function addToBag($pokemon){
        if(count($this->bag) >= 10) return;
        $this->bag[$pokemon->getName()] = $pokemon;
    }

    public function removeFromBag($name){
        unset($this->bag[$name]);
    }

    public function getFromBag($name){
        return $this->bag[$name];
    }

    public function getBag(){
        $return = array();
        foreach($this->bag as $pokemon){
            array_push($return, $pokemon->getName());
        }
        return $return;
    }

    public function clearBag(){
        $this->bag = array();
    }

}

?>