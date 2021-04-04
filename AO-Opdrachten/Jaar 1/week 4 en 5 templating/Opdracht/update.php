 <?php

require('function.php');

$id = $_POST['location'];
$characterid = $_POST['characterid'];


updateLocation($id, $characterid);


header("Location: indeks.php");  




?> 

