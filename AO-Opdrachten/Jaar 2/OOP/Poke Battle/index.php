<?php
require_once('Pokemon.php');
require_once('Pikachu.php');

$pikachu = new Pikachu();

print_r('<pre>'. $pikachu->name . '</pre>');

?>