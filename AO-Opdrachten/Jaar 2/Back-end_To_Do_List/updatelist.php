<?php 
require('function.php');
  $conn =  openDatabaseConnection();
  $id = $_GET['id'];
?>

<form action="editList.php" method="POST" target="_blank">
<input name="listid" type="hidden" Value="<?php echo $id; ?>">
  <label for="name">Naam</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="description">Beschrijving</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Submit">
</form>

