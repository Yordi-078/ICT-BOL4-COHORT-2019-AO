<?php

require('function.php');

$id = $_GET['listid'];

deleteList($id);
deleteTaskID($id);


 header("Location: index.php");  




?> 

