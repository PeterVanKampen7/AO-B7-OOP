<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create necessary objects

// Energy types
$fire = new EnergyType('Fire', 0);
$water = new EnergyType('Water', 0);
$lightning = new EnergyType('Lightning', 0);
$fighting = new EnergyType('Fighting', 0);

// Weaknesses
$fireWeakness = new Weakness($fire, 1.5);
$waterWeakness = new Weakness($water, 2);

// Resistances
$fightingResistance = new Resistance($fighting, 20);
$lightningResistance = new Resistance($lightning, 10);

// How many Pokemon are alive
echo 'Pokemon alive: ' . Pokemon::getAlive() . '</br>';

// Make two pokemons: Pikachu and Charmeleon
$pikachu = new Pikachu('Pika', $lightning, $fireWeakness, $fightingResistance);
$charmeleon = new Charmeleon('Char', $fire, $waterWeakness, $lightningResistance );

// Pikachu attacks Charmeleon, echo's added for front end clarity
echo '<br>Charmeleon Health: ' . $charmeleon->getHealth();
echo '</br>' . $pikachu->getName() . ' attacks ' . $charmeleon->getName() . ' with ' . $pikachu->getAttacks()['Electric Punch']->getName() . '</br>';
$pikachu->attack($charmeleon, $pikachu->getAttacks()['Electric Punch']);
echo 'Charmeleon Health: ' . $charmeleon->getHealth();

// Charmeleon attacks Pikachu, echo's added for front end clarity
echo '</br><br>Pikachu Health: ' . $pikachu->getHealth();
echo '</br>' . $charmeleon->getName() . ' attacks ' . $pikachu->getName() . ' with ' . $charmeleon->getAttacks()['Flare']->getName() . '</br>';
$charmeleon->attack($pikachu, $charmeleon->getAttacks()['Flare']);
echo 'Pikachu Health: ' . $pikachu->getHealth();

echo '</br></br>Pokemon alive: ' . Pokemon::getAlive() . '</br></br>';

// What is the average Health of all Pokemon
echo 'Average HP: ' . Pokemon::avgHealth() . '</br></br>';

echo '</br>Pikachu Health: ' . $pikachu->getHealth();
echo '</br>' . $charmeleon->getName() . ' attacks ' . $pikachu->getName() . ' with ' . $charmeleon->getAttacks()['Flare']->getName() . '</br>';
$charmeleon->attack($pikachu, $charmeleon->getAttacks()['Flare']);
echo 'Pikachu Health: ' . $pikachu->getHealth();

// How many Pokemon are alive
echo '</br></br>Pokemon alive: ' . Pokemon::getAlive() . '</br></br>';



// Make a new PokeBag
$pokebag = new PokeBag;
// Add Pokemon to Bag
$pokebag->addToBag($pikachu);
$pokebag->addToBag($charmeleon);
// Output names of Pokemon in Bag
print_r($pokebag->getBag());

