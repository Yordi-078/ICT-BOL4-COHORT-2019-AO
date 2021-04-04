<h1 class="text-center">Overzicht van personen</h1>	
<nav>
<ul>
<div class="row">
	<div class="col text-center">
	<a class="btn-lg btn-primary text-white" href="<?= URL ?>student/createB">Bezoeker toevoegen</a>
	</ul>
	</nav>
	</div>
	</div>
<?php

foreach($data['bezoekers'] as $bezoekers){
	$id = $bezoekers["id"];
	$name = $bezoekers["name"];
	$adres = $bezoekers["adres"];
	$telefoonnummer = $bezoekers["telefoonnummer"];
	$identificatienummer = $bezoekers["identificatienummer"];

?>
<ul>
<div class="card-header">
<?php
	echo"
	<tr>
	<td> naam: $name </td>
	<td> - adres: $adres </td>
	<td> - telefoonnummer: $telefoonnummer </td>
	<td>- identificatienummer: $identificatienummer </td>
	<td><a href=". URL ."student/deleteB/$id>Delete</a></td>
	<td><a href=". URL ."student/editB/$id>Update</a></td>
	</tr>";
	?>
	</ul>
	</div>
	<?php
}
?>

