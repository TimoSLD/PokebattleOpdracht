<?php

class Pikachu {

public $name;
public $EnergyType;
public $hitpoints;
public $health;
public $Attack;
public $Weakness;
public $Resistance;

public function __construct($name, $gender, $team, $oneliner)
{
    $this->name = $name;
    $this->gender = $gender;
    $this->team = $team;
    $this->oneliner = $oneliner;
}


?>