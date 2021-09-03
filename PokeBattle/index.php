<?php
require_once('Pokemon.php');
require_once('Pikachu.php');
require_once('Charmeleon.php');
require_once('Weakness.php');
require_once('Resistance.php');
require_once('Attack.php');

$pikachu = new Pikachu();

$charmeleon = new Charmeleon();

$pikachu->attack($pikachu, $pikachu->attacks[0], $charmeleon);

$charmeleon->attack($charmeleon, $charmeleon->attacks[0], $pikachu);

?>