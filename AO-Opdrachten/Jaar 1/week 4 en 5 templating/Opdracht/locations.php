<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="personen.css">
<title>Locations</title>
</head>
<body>

<h1>Alle 7 locaties uit de database</h1>

<?php 
require('function.php');
$locations = getAllLocations();






foreach ($locations as $location) {
echo "<p>".$location['name']. "</p>";
?>


<a href="delete.php?locationid=<?php echo $location['id']; ?>">delete location</a>

<?php
}
?>









</body>
</html>
