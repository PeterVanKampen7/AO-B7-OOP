<?php

Class Charmeleon extends Pokemon {

    public function __construct($name){
        parent::__construct($name, 'Fire', 0, 60, 'Water', 2, 'Lightning', 20);
        $this->addAttack('Headbutt', 10);
        $this->addAttack('Flare', 30);
    }

}

?>