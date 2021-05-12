<?php

class Charmeleon extends Pokemon
{

    public function __construct($name = "Charmeleon")
    {
        $type = "Fire";
        $hitpoints = 60;
        $weaknesses = array(
            new Weakness("Water", 2),
        );
        $resistances = array(
            new Resistance("Electric", 10),
        );
        $attacks = array(
            new Attack("Head Butt", 10),
            new Attack("Flare", 30)
        );
        parent::__construct($type, $name, $hitpoints, $weaknesses, $resistances, $attacks);
    }
}

?>