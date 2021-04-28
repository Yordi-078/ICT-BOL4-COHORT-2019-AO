<style>
body{
background-color: green;
}

img{
width: 100px;
height: 100px;
}

.charmeleon{
    position:absolute;
    bottom:0;
    right:0;
}

</style>
<?php
require_once('Pokemon.php');
require_once('Pikachu.php');
require_once('Charmeleon.php');
require_once('Weakness.php');
require_once('Resistance.php');
require_once('Attack.php');

$pikachu = new Pikachu();

$charmeleon = new Charmeleon();


// print_r('<pre>'. $pikachu . '</pre>');


for($i = 0; $i < 2; $i++){
    $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);

    $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
}




// print_r('<pre>'. $charmeleon . '</pre>');
?>