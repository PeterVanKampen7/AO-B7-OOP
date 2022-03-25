<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// How many Pokemon are alive
echo 'Pokemon alive: ' . Pokemon::getAlive() . '</br>';

// Make two pokemons: Pikachu and Charmeleon
$pikachu = new Pikachu('Pika');
$charmeleon = new Charmeleon('Char');

// Pikachu attacks Charmeleon, echo's added for front end clarity
echo '<br>Charmeleon Health: ' . $charmeleon->getHealth();
$pikachu->attack($charmeleon, $pikachu->getAttacks()['Electric Punch']);
echo 'Charmeleon Health: ' . $charmeleon->getHealth();

// Charmeleon attacks Pikachu, echo's added for front end clarity
echo '</br><br>Pikachu Health: ' . $pikachu->getHealth();
$charmeleon->attack($pikachu, $charmeleon->getAttacks()['Flare']);
echo 'Pikachu Health: ' . $pikachu->getHealth();

// How many Pokemon are alive
echo '</br></br>Pokemon alive: ' . Pokemon::getAlive() . '</br></br>';

// What is the average Health of all Pokemon
echo 'Average HP: ' . Pokemon::avgHealth() . '</br></br>';

// Make a new PokeBag
$pokebag = new PokeBag;
// Add Pokemon to Bag
$pokebag->addToBag($pikachu);
$pokebag->addToBag($charmeleon);
// Output names of Pokemon in Bag
print_r($pokebag->getBag());

