<?php
    class Pikachu extends Pokemon{  
        public function __construct($name = "Pikachu"){
            $energyType = "Lightning";
            $hitpoints = 60;
            $weaknesses = array(
                new Weakness("Fire", 1.5),
            );
            $resistances = array(
                new Resistance("Fighting", 20),
            );
            $attacks = array(
                new Attack("Electric Ring", 50),
                new Attack("Pika Punch", 20)
            );
            parent::__construct($energyType, $name, $hitpoints, $weaknesses, $resistances, $attacks);
        } 
    }
?>