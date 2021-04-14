<?php
require_once('Pokemon.php');
require_once('Pikachu.php');
require_once('Charmeleon.php');
require_once('Weakness.php');
require_once('Resistance.php');
require_once('Attack.php');

$pikachu = new Pikachu();

$charmeleon = new Charmeleon();

print_r('<pre>'. $pikachu . '</pre>');

print_r('<pre>'. $charmeleon . '</pre>');
?>