<?php

abstract Class Pokemon{

    // Fields
    private $name;
    private $energyType;
    private $maxHealth;
    private $health;
    private $attacks = array();
    private $weakness;
    private $resistance;
    static $alivePokemon = 0;
    static $aliveArray = array();

    // Constructor
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

    // Methods

    // Add a new attack to the Pokemon
    public function addAttack($attackName, $attackDamage){
        $this->attacks[$attackName] = new Attack($attackName, $attackDamage);
    }

    // Make this pokemon attack another, takes the target and the attack as parameters
    public function attack($opponent, $attack) {
        // Get the standard damage of the attack
        $damageDone = $attack->getDamage();

        // Check if the target is weak to the damage type
        if($opponent->getWeakness()->getEnergyType()->getType() == $this->getEnergyType()->getType()) {
            // If target is weak, multiply the damage by the weakness multiplier
            $damageDone *= $opponent->getWeakness()->getMultiplier();          
        // Check if the target is resistant to the damage type
        } else if($opponent->getResistance()->getEnergyType()->getType() == $this->getEnergyType()->getType()) {
            // If target is resistant subtract value from damage
            $damageDone -= $opponent->getResistance()->getValue();        
        }

        // Subtract the damage from the opponents health
        $opponent->receiveDamage($damageDone);
    }

    // Function to have this Pokemon take damage, takes the damage as parameter
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