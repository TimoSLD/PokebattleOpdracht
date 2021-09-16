<?php


class Charmeleon extends Pokemon
{  
    public function __construct($name = "Charmeleon")
    {
        $energyType = "Fire";
        $hitpoints = 60;
        $weaknesses = array(
            new Weakness("Water", 2.0),
        );
        $resistances = array(
            new Resistance("Lightning", 10),
        );
        $attacks = array(
            new Attack("Head Butt", 10),
            new Attack("Flare", 30)
        );

        parent::__construct($energyType, $name, $hitpoints, $weaknesses, $resistances, $attacks);
    }
    
}



?>