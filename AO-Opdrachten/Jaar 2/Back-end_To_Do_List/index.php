<?php 
require('function.php');
$conn =  openDatabaseConnection();

$lists = getAllLists();


?>

<a class="btn-lg btn-primary text-white align-self-center" href="createList.php">Nieuwe List</a>

<?php foreach ($lists as $list) { ?>
<h2 class="text-center"><?=$list['name']?></h2> 
<p class="text-center"><?=$list['description']?></p> 
<?php } ?>