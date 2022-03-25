<?php

abstract class PokemonTemplate {

    abstract public function addAttack($attackName, $attackDamage);
    abstract public function attack($opponent, $attack);
    abstract public function receiveDamage($damage);
    abstract public function getName();
    abstract public function getEnergyType();
    abstract public function getMaxHealth();
    abstract public function getHealth();
    abstract public function getAttacks();
    abstract public function getWeakness();
    abstract public function getResistance();

    abstract public static function getAlive();
    abstract public static function addAlive();
    abstract public static function removeAlive();
    abstract public function addToList();
    abstract public static function avgHealth();

}

?>