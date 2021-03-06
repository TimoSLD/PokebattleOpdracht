<?php

class Pokemon{

    public $name;
    public $energyType;
    public $hitPoints;
    public $hitpoints;
    public $weakness;
    public $resistance;
    public $attacks;

    public static $population = 0;

    public function __construct($energyType, $name, $hitpoints, $weakness, $resistance, $attacks){
        $this->energyType = $energyType;
        $this->name = $name;
        $this->hitPoints = $hitpoints;
        $this->hitpoints = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;

        self::$population++;
    }

    public function __toString() {
        return json_encode($this);
    }
    
    
    /**
     *  function attack
     * deze functie laat zien dat de ene pokemon de andere aanvalt.
     * hij haalt de aanvallende pokemon op, de verdedigende en de attack die die gebruikt.
     * hij stuurt de value van de damage mee en de pokemon die aangevallen wordt.
     */
    public function attack($attack, $pokemon){
        
        return $this->damage($attack->damage, $pokemon);

    
    }

      /**
     *  function damage
     * deze functie heeft de value meegekregen die in de damage zat van de aanvallende pokemon en hij heeft de verdedigende pokemon meegegeven.
     * hij foreacht over de verdigende pokemon zijn weaknesses en die zet die in de variabel weakness.
     * als de verdedigende pokemon zijn weakness gelijk is aan de aanvallende pokemon zijn weakness (hij gooit de value damage in de variabel damage) die doet die keer de weakness zijn value.
     * hij foreacht over de verdedigende pokemon zijn resistance die gooit die in de variabel resistance.
     * dan als de energytype van de aanvallende pokemon gelijk is aan de resistance van de verdedigende pokemon (hij gooit de value damage in de variabel damage) dan de value van de resistance - de value van de damage. 
     * * op het laatst echo die de aantal damage die die heeft gedaan op de verdedigende pokemon.
     */

    public function damage($damage, $pokemon){
        foreach($pokemon->weakness as $weakness){
            if($weakness->energyType == $this->energyType){
                $damage = $damage * $weakness->value;  
            }
        }
        foreach($pokemon->resistance as $resistance){
            if($this->energyType == $resistance->energyType){
                $damage = $damage - $resistance->value;
            }
            
        }
        
      $this->calculateHealth($damage, $pokemon);
            return $damage;

       
    }
     /**
     * de function getPopulation kijkt hoeveel hp de pokemon nog heeft en of die nog leeft.
     * hij krijgt de damage mee en de verdedigende pokemon.
     * als de pokemon zijn health (hitpoints) minder is dan de damage die word gedaan dan worden de hitpoints van de pokemon naar 0 gezet. (dood).
     * * dan echo die de naam van de verdedigende pokemon "is uitgeschakeld". 
     * anders (pokemon zijn health word in variabel gezet) als de verdedigende pokemon zijn hitpoints meer is dan damage dan haalt die de damage van de pokemon zijn hitpoints af.
     * dan laat die de aantal hitpoints nog zien van de verdedigende pokemon met een echo.
     * als de hitpoints 0 is dan echo naam van verdedigende pokemon met "die is uitgeschakeld". 
     */

    public function calculateHealth($damage, $pokemon){
        if($pokemon->hitPoints <= $damage){
            //echo "<br>".$pokemon->name . " is uitegschakeld";
            $pokemon->hitPoints = 0;
            self::$population--;

        }else{
            $pokemon->hitPoints = $pokemon->hitPoints - $damage;
            //echo "<br>". $pokemon->name . " heeft nog " . $pokemon->hitPoints . " hp";
        }
    }

    public static function getpopulation() {
            return self::$population;
    }
}

?>