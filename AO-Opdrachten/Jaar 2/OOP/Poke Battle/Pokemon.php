<?php 
//namespace = een werkomgeving die je op meerdere paginas kan oproepen waardoor het een grote file wordt je kan inplaats van de include ook de namespace aanroepen
//nadeel van autoloading is dat het dezelfde naam moet hebben als de file voor de classname anders werkt het niet

//setter = je veranderd de hp van de pokemon met wat je mee gestuurd krijgt
//nadeel = heb geen idee wat het nadeel is
//getter = je pakt de value uit de function en laat zien hoeveel hp de pokemon nog heeft
//nadeel = geen idee wat het nadeel is
//alternatieven zijn dat je het gewoon gelijk gebruikt in de function zoals ik heb gedaan

//public = je kan het over gebruiken .. private = je kan hem alleen binnen de class aanroepen ... protected = kan alleen gebruikt worden in de class en classes die deze clas extenden...
// abstract = geen idee ... final = na deze function mag het niet meer overschreven worden (function nieuwe betekenis)

//inherance met extends kunnen we class gebruiken in de extends class
//alternatief alles in de pikachu class zetten
//je kan ze niet los van elkaar gebruiken pikachu moet altijd pokemon gebruiken

//construct = construct bouwt het object met alle informatie die we meegeven we gebruiken bijvoorbeel bij het object pikachu
//alternatief = er is geen alternatief elke class heeft een construct of je hem nou in je code hebt of niet
//nadeel = als je het niet heb werkt het niet

//propertie = variable in een class
//method = function in een class

//naming conventions = de manier van naam geving binnen een project

//static = de class krijgt de waarde en anders krijgt het object de waarde
//voordeel/alternatief is dat je niet steeds objecten hoeft aan te maken





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
        if($this->hitPoints == 0){
            echo "<br> ". $this->name . "  is al uitgeschakeld";
        }else{
            echo $this->name . " valt " . $pokemon->name . " aan met de " . $attack->name;
            $this->damage($attack->damage, $pokemon);
        }
    }

    public function damage($damage, $pokemon){ 
        foreach($pokemon->weakness as $weakness){
            if($weakness->energy_type == $this->energyType){
                $damage = $damage * $weakness->value;
            }
        }

          foreach ($pokemon->resistance as $resistance) {
            if($this->energyType == $resistance->energy_type) {
                $damage = $damage - $resistance->value;
            }
        }


        echo "<p> It dealt " . $damage . " damage to " . $pokemon->name . "</p>";

        $this->getPopulationHealth($damage , $pokemon);
    }

    public function getPopulationHealth($damage , $pokemon){

    if($pokemon->hitPoints < $damage){
        echo "<br>". $pokemon->name . " is uitgeschakeld";
        $pokemon->hitPoints = 0;
    }else{
        $pokemon->hitPoints = $pokemon->hitPoints - $damage;
        echo "<br>". $pokemon->name . " heeft nog " . $pokemon->hitPoints . " hitpoints <br>";

    }     

    if($pokemon->hitPoints == 0){
        echo $pokemon->name . " is uitgeschakeld";
       }
   

    }

}


?>