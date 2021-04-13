<?php

require_once('Pokemon.php');

class Pikachu extends Pokemon
{  
    public function __construct($name = "Pikachu")
    {
        $type = "Electric";

        parent::__construct($type, $name);
    }
    
}


 

?>