<?php

// Class charmeleon extends de abstract class Pokemon
Class Pikachu extends Pokemon {

    // Contructor voor deze class, neemt alleen de naam voor de pokemon in, gebruikt daarna 
    // de constructor van de parent met standaard waardes van dit type Pokemon
    public function __construct($name){
        parent::__construct($name, 'Lightning', 0, 60, 'Fire', 1.5, 'Fighting', 20);
        $this->addAttack('Electric Punch', 50);
        $this->addAttack('Pika Punch', 20);
    }

}

?>