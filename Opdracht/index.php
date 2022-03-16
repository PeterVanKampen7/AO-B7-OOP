<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

echo 'Pokemon alive: ' . Pokemon::getAlive() . '</br>';

$pikachu = new Pikachu('Pika');
$charmeleon = new Charmeleon('Char');

echo '<br>Charmeleon Health: ' . $charmeleon->getHealth();
$pikachu->attack($charmeleon, $pikachu->getAttacks()['Electric Punch']);
echo 'Charmeleon Health: ' . $charmeleon->getHealth();

echo '</br><br>Pikachu Health: ' . $pikachu->getHealth();
$charmeleon->attack($pikachu, $charmeleon->getAttacks()['Flare']);
echo 'Pikachu Health: ' . $pikachu->getHealth();

echo '</br></br>Pokemon alive: ' . Pokemon::getAlive() . '</br></br>';

echo 'Average HP: ' . Pokemon::avgHealth();

$pokebag = new PokeBag;
$pokebag->addToBag($pikachu);

print_r($pokebag->getBag());