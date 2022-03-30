<?php

// Class charmeleon extends de abstract class Pokemon
Class Charmeleon extends Pokemon {

    // Contructor voor deze class, neemt alleen de naam voor de pokemon in, gebruikt daarna 
    // de constructor van de parent met standaard waardes van dit type Pokemon
    public function __construct($name, $type, $weakness, $resistance){
        parent::__construct($name, $type, 60, $weakness, $resistance);
        $this->addAttack('Headbutt', 10);
        $this->addAttack('Flare', 30);
    }

}

?>