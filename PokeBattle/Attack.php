<?php

class Attack
{
    public $name;
    public $damage;

    public function __construct($attack_name, $attack_damage)
    {
        $this->name = $attack_name;
        $this->damage = $attack_damage;
    }

    public function __toString() {
        return json_encode($this);
    }


}



?>