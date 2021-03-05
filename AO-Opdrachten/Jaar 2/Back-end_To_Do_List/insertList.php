<?php

require('function.php');

$name = $_POST['name'];
$description = $_POST['description'];

 echo"$name, $description";

 insertList($name, $description);

 header("Location: index.php"); 
?>