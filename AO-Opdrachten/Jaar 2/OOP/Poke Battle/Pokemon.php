<?php 
class Pokemon{

    public $name;
    public $energyType;
    public $hitPoints;
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
        echo $this->name . " valt " . $pokemon->name . " aan met de " . $attack->name;

        $this->damage($attack->damage, $pokemon);
    }

    public function damage($damage , $pokemon){
        echo "<br>" . $damage;
        echo $pokemon;
    }

}


?>