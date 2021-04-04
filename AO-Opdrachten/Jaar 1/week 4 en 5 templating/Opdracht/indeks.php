<?php
require('function.php');

$result = getAllMembers();



?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="personen.css">


<title></title>
</head>
<button onclick="document.location = 'locations.php'">Alle locations</button>
<h1>Characters</h1>




<?php



foreach ($result as $character) {
echo"<div class= 'alles'>";
echo '<a href="personen.php/?name=' . urlencode($character['name']) . '">';
echo "<img src='./img/" .$character['avatar'] . "'>";
echo "<p id='name'>".$character['name']. "</p>";
echo "<p id='health'> health :".$character['health']."</p>";
echo "<p id='defense'> defense :".$character['defense']."</p>";
echo "<p id='attack'> attack :".$character['attack']. "</P>";
echo "</a>";
echo"</div>";
}


include('footer.php')
?>

</body>
</html>
