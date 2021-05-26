<?php 
//namespace = een werkomgeving die je op meerdere paginas kan oproepen waardoor het een grote file wordt je kan inplaats van de include ook de namespace aanroepen
//nadeel van autoloading is dat het dezelfde naam moet hebben als de file voor de classname anders werkt het niet

//setter = je veranderd de hp van de pokemon met wat je mee gestuurd krijgt
//nadeel = heb geen idee wat het nadeel is
//getter = je pakt de value uit de function en laat zien hoeveel hp de pokemon nog heeft
//nadeel = geen idee wat het nadeel is
//alternatieven zijn dat je het gewoon gelijk gebruikt in de function zoals ik heb gedaan

//public = je kan het over gebruiken .. private = je kan hem alleen binnen de class aanroepen ... protected = kan alleen gebruikt worden in de class en classes die deze clas extenden...
// abstract = onnodige informatie verbergen maar wel wat ik mee wil sturen en krijg  final = na deze function mag het niet meer overschreven worden (function nieuwe betekenis)

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

//verschill class en object = de class is alles wat erin staan en object is de uitkomts


class Pokemon{

    private $name;
    private $energyType;
    private $hitPoints;
    protected $hp;
    public $weakness;
    public $resistance;
    public $attacks;
    private static $pokemons = [];
  


    public function __construct($type, $name, $hitpoints, $weakness, $resistance, $attacks)
    {
        $this->energyType = $type;
        $this->name = $name;
        $this->hitPoints = $hitpoints;
        $this->hp = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
        // self::$pokemons++;
        array_push(self::$pokemons, $this);
        
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

    private function damage($damage, $pokemon){ 
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

    private function getPopulationHealth($damage , $pokemon){

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

    // public static function population($array){
    //     // var_dump($array);
    //     echo " <br> <br> Dit zijn de pokemons die nog leven en zijn levens erbij! <br> <br>";
    //     for ($i = 0; $i < count($array); $i++) {

    //         if($array[$i]->hitPoints == 0){
    //         echo $array[$i]->name;
    //         echo " deze pokemon is dood";
    //         }else{
    //             echo "<br> <br> ";
    //             echo $array[$i]->name;
    //             echo " heeft nog " . $array[$i]->hitPoints . " hp";
    //         }
    //     }
    // }
    
    public static function population(){
    // echo self::$pokemons;
    $pokemonPopulations = 0;
          for ($i = 0; $i < count(self::$pokemons) ; $i++) {
              if(self::$pokemons[$i]->hitPoints > 0){
                $pokemonPopulations++;
              }
         }
         return $pokemonPopulations;
    }

    }   


?>