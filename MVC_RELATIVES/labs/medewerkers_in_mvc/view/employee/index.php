<?php
		// maak een overzicht lijst van ALLE personen
		


	?>
	<h1>Overzicht van personen</h1>
	<?php
foreach($data['employees'] as $employee){
	$id = $employee["id"];
	$name = $employee["name"];
	$age = $employee["age"];

	

	echo"
	<tr>
	<td> $name </td>
	<td> $age </td>
	<td><a href=". URL ."employee/delete/$id>Delete</a></td>
	<td><a href=". URL ."employee/edit/$id>Update</a></td>
	</tr>";
}
?>

