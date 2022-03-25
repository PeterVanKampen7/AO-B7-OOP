<?php

// Class charmeleon extends de abstract class Pokemon
Class Charmeleon extends Pokemon {

    // Contructor voor deze class, neemt alleen de naam voor de pokemon in, gebruikt daarna 
    // de constructor van de parent met standaard waardes van dit type Pokemon
    public function __construct($name){
        parent::__construct($name, 'Fire', 0, 60, 'Water', 2, 'Lightning', 20);
        $this->addAttack('Headbutt', 10);
        $this->addAttack('Flare', 30);
    }

}

?>