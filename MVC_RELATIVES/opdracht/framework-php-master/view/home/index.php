<div class="container">
 <h1 class="text-center">Overzicht van paarden en reserveringen</h1>
</div>

<nav>
	<ul>
	<div class="row">
	<div class="col text-center">
		<a class="btn-lg btn-primary text-white" href="<?= URL ?>home/createP">Paard toevoegen</a>
		<a class="btn-lg btn-primary text-white" href="<?= URL ?>home/planning">Paard reserveren</a>
	</ul>
	</nav>
	</div>
  </div>




<?php


foreach($data['paarden'] as $paarden){
	$id = $paarden["id"];
    $name = $paarden["name"];
    $leeftijd = $paarden["leeftijd"];
    $ras = $paarden["ras"];
    $springsport = $paarden["springsport"];

?>
<ul>	
<div class="card-header">
<?php
	echo"
	<tr> 
    <td> naam: $name </td>
    <td> - leeftijd: $leeftijd jaar </td
    <td> - ras: $ras </td>
	<td> - springsport: $springsport </td>
    <td><a href=". URL ."home/deleteP/$id>Delete</a></td>
	<td><a href=". URL ."home/editP/$id>Update</a></td>
	</tr>";
	?>
	</ul>
	<?php
}
?>
</div>


<h1 class="text-center">Alle reserveringen</h1>
<?php
$results =  getAllR();
foreach($results as $reserveren){
	$id = $reserveren["id"];
	$nameP = $reserveren["nameP"];
	$nameB = $reserveren["nameB"];
	$ritjes = $reserveren["ritjes"];

	$rit = $ritjes;
	$kosten = 55;
	$totaalprijs = $rit * $kosten;

?>
<ul>	
<div class="card-header">
<?php
	echo"
	<tr>
	<td> dit paard: $nameP </td>
	<td> - is gereserveerd door: $nameB </td>
	<td> - en gaat  $ritjes ritjes rijden</td>
	<td> - Prijs: €$totaalprijs </td>
    <td><a href=". URL ."home/deleteR/$id>Delete</a></td>
	<td><a href=". URL ."home/editR/$id>Update</a></td>
	</tr>";
	?>
	</ul>
	<?php
}
?>
</div>


