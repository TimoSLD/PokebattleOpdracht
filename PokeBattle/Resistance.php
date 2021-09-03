<?php

class Resistance
{
    public $energy_type;
    public $value;

    public function __construct($energy_type, $value)
    {
        $this->energy_type = $energy_type;
        $this->value = $value;
    }
}

?>