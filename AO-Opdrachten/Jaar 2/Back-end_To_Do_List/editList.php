<?php
require('function.php');

$id = $_POST['listid'];
$name = $_POST['name'];
$description = $_POST['description'];

editList2($id, $name, $description);

header("location: index.php")
?>