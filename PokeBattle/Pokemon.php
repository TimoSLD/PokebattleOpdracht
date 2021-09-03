<?php

class Pokemon{

    private $name;
    private $energyType;
    private $hitPoints;
    protected $hp;
    public $weakness;
    public $resistance;
    public $attacks;
  


    public function __construct($type, $name, $hitpoints, $weakness, $resistance, $attacks)
    {
        $this->energyType = $type;
        $this->name = $name;
        $this->hitPoints = $hitpoints;
        $this->hp = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
        
    }


    public function __toString() {
        return json_encode($this);
    }
    
    public function attack($attackpokemon, $attack, $pokemon){
        echo "<br>". $this->name . " valt " . $pokemon->name . " aan met de " . $attack->name;
        $this->damage($attack->damage, $pokemon);
    }

    public function damage($damage, $pokemon){
        foreach($pokemon->weakness as $weakness){
            if($weakness->energy_type == $this->energyType){
                $damage = $damage * $weakness->value;  
            }
    }
        foreach($pokemon->resistance as $resistance){
            if($this->energyType == $resistance->energy_type){
                $damage = $damage - $resistance->value;
            }
        }
        echo "<p> It dealt " . $damage . " damage to " . $pokemon->name . "</p>";
        $this->getPopulationHealth($damage , $pokemon);
    }

    private function getPopulationHealth($damage , $pokemon){
        if($pokemon->hitPoints < $damage){
        echo "<br>".$pokemon->name . "is uitegschakeld";
            $pokemon->hitPoints = 0;
        }else{
            $pokemon->hitPoints - $damage;
            echo "<br>". $pokemon->name . " heeft nog " . $pokemon->hitPoints . " hp";
        }
    }


}




?>