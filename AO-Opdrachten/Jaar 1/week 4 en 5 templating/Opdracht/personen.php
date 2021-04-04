

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../personen.css">
</head>
<body>



<?php


require('function.php');
$character =  getOneMember($_GET['name']);
$result2 = getAllLocations();


 ?>

<form action="../update.php" method="POST">
  <label><b>Huidige Locatie:</b></label>
  <select name="location">
    <?php 
  foreach($result2 as $location){ ?>
  <option value="<?= $location['id'] ?>"><?=$location['name'] ?></option> <?php } ?>




  </select>
  <input name="characterid" type="hidden" Value="<?php echo $character['id']; ?>">
  <input type="submit" value="update">

</form>




<?php






    echo"<div class= 'avantarnaam'>";
    echo "<h1>".$character['name']. "</h1>";
    echo "</div>";
    
    echo "<a class= 'knop' href='../indeks.php'>terug</a>";
    echo"<div>";
    
    echo"<div class= 'character'>";
    echo "<img src='../img/" .$character['avatar'] ."'>";
    echo"</div";
    
    echo"<div class= 'bio'>";
    echo "<p>".$character['bio']. "</P>";
    echo"</div>";
    
    
    echo "</div>";
    
    
    echo "<div style= 'background-color:".$character['color']. "'>";
    
    echo "<p id='health'> health :".$character['health']."</p>";
    echo "<p id='defense'> defense :".$character['defense']."</p>";
    echo "<p id='attack'> attack :".$character['attack']. "</P>";
    echo "<p id='weapon'> weapon :".$character['weapon']. "</P>";
    echo "<p id='armor'> armor: ".$character['armor']. "</P>";
    
    echo "</div>";
    
    echo"</div>";

    


include('footer.php');

?>



</body>
</html>