<h1>Overzicht van personen</h1>	

<nav>
	<ul>
		<li><a href="<?= URL ?>student/createB">Bezoeker toevoegen</a></li>
	</ul>
	</nav>

<?php

foreach($data['bezoekers'] as $bezoekers){
	$id = $bezoekers["id"];
	$name = $bezoekers["name"];
	$adres = $bezoekers["adres"];
	$telefoonnummer = $bezoekers["telefoonnummer"];
	$identificatienummer = $bezoekers["identificatienummer"];

?>
<ul>	
<?php
	echo"
	<tr>
	<td> $name </td>
	<td> $adres </td>
	<td> $telefoonnummer </td>
	<td> $identificatienummer </td>
	<td><a href=". URL ."student/deleteB/$id>Delete</a></td>
	<td><a href=". URL ."student/editB/$id>Update</a></td>
	</tr>";
	?>
	</ul>
	<?php
}
?>

