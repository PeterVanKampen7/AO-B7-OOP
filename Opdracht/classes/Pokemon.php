<?php

Class Pokemon {

    private $name;
    private $energyType;
    private $maxHealth;
    private $health;
    private $attacks = array();
    private $weakness;
    private $resistance;
    static $alivePokemon = 0;
    static $aliveArray = array();

    public function __construct($name, $energyTypeName, $energyTypeValue, $maxHealth, $weaknessType, $weaknessMultiplier, $resistanceType, $resistanceValue) {
        $this->name = $name;
        $this->energyType = new EnergyType($energyTypeName, $energyTypeValue);
        $this->maxHealth = $maxHealth;
        $this->health = $this->maxHealth;
        $this->weakness = new Weakness($weaknessType, $weaknessMultiplier);
        $this->resistance = new Resistance($resistanceType, $resistanceValue);
        $this->addToList();
        self::addAlive();    
    }

    public function addAttack($attackName, $attackDamage){
        $this->attacks[$attackName] = new Attack($attackName, $attackDamage);
    }

    public function attack($opponent, $attack) {
        $damageDone = $attack->getDamage();

        if($opponent->getWeakness()->getEnergyType() == $this->getEnergyType()->getType()) {
            $damageDone *= $opponent->getWeakness()->getMultiplier();          
        } else if($opponent->getResistance()->getEnergyType() == $this->getEnergyType()->getType()) {
            $damageDone -= $opponent->getResistance()->getValue();        
        }

        $opponent->receiveDamage($damageDone);

        echo "</br>{$this->getName()} attacks {$opponent->getName()} with {$attack->getName()} for {$damageDone} damage.</br>";
    }

    public function receiveDamage($damage) {
        $this->health -= $damage;
        if($this->health <= 0){
            self::removeAlive();
        }
    }

    // Getters

    public function getName(){
        return $this->name;
    }

    public function getEnergyType(){
        return $this->energyType;
    }

    public function getMaxHealth(){
        return $this->maxHealth;
    }

    public function getHealth(){
        return $this->health;
    }

    public function getAttacks(){
        return $this->attacks;
    }

    public function getWeakness(){
        return $this->weakness;
    }

    public function getResistance(){
        return $this->resistance;
    }

    // Static functions

    public static function getAlive(){
        return self::$alivePokemon;
    }

    public static function addAlive(){
        self::$alivePokemon++;
    }

    public static function removeAlive(){
        self::$alivePokemon--;
    }

    public function addToList(){
        array_push(self::$aliveArray, $this);
    }

    public static function avgHealth(){
        $totalHealth = 0;
        foreach(self::$aliveArray as $pokemon){
            $totalHealth += $pokemon->getHealth();
        }
        return $totalHealth / count(self::$aliveArray);
    }
}

?>