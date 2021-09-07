<?php
require_once('Pokemon.php');
require_once('Pikachu.php');
require_once('Charmeleon.php');
require_once('Weakness.php');
require_once('Resistance.php');
require_once('Attack.php');

$pikachu = new Pikachu();

$charmeleon = new Charmeleon();

for ($i=0; $i < 2; $i++) { 
    $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);
    $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
}
?>