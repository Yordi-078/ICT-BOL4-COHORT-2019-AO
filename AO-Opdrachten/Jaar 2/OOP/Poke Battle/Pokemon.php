<?php 

class Pokemon{

    public $name;
    public $energyType;

    public function __construct($type, $name)
    {
        $this->energyType = $type;
        $this->name = $name;
    
    }

}


?>