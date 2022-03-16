<?php

Class Pikachu extends Pokemon {

    public function __construct($name){
        parent::__construct($name, 'Lightning', 0, 60, 'Fire', 1.5, 'Fighting', 20);
        $this->addAttack('Electric Punch', 50);
        $this->addAttack('Pika Punch', 20);
    }

}

?>