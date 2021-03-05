<?php 
require('function.php');
  $conn =  openDatabaseConnection();
?>

<form action="insertList.php" method="POST" target="_blank">
  <label for="fname">Naam</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="lname">Beschrijving</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Submit">
</form>

