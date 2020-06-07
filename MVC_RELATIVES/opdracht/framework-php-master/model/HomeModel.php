<?php

function getAllPaarden() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM paarden";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createPaard($name, $leeftijd, $ras, $springsport){
	$conn= openDatabaseConnection();
	$stmt = $conn->prepare("INSERT INTO paarden (name, leeftijd, ras, springsport) VALUES (:name, :leeftijd, :ras, :springsport)");
	$stmt->bindParam(":name" , $name);
	$stmt->bindParam(":leeftijd" , $leeftijd);
	$stmt->bindParam(":ras" , $ras);
	$stmt->bindParam(":springsport" , $springsport);
	$stmt->execute();
 }

 function getPaardById($id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("SELECT * from paarden where id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();

}

function deletePaard($id){
    $conn= openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM paarden where id = :id ");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
 }

 function updatePaard($name, $leeftijd, $id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("UPDATE paarden SET name=:name, leeftijd=:leeftijd, ras=:ras, springsport=:springsport WHERE id=:id");
    $stmt->bindParam(":name" , $name);
	$stmt->bindParam(":leeftijd" , $leeftijd);
	$stmt->bindParam(":ras" ,  $ras);
	$stmt->bindParam(":springsport" , $springsport);
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
    $conn = null;
    return $stmt; 
 }

 

 
 function planner($nameP, $nameB, $ritjes){
	$conn = openDataBaseConnection();
	$insert = $conn->prepare("INSERT INTO `reserveren` (`nameP`, `nameB`, `ritjes`) VALUES (:nameP, :nameB, :ritjes)");
	$insert->bindParam(':nameP', $nameP);
	$insert->bindParam(':nameB', $nameB);
	$insert->bindParam(':ritjes', $ritjes);
   $conn = null;
   $insert->execute();
	return $insert->errorCode();
	
}

function getAllR() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reserveren";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}



function deleteReserveren($id){
    $conn= openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM reserveren where id = :id ");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
 }

 
 function getReserverenById($id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("SELECT * from reserveren where id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();

}

function updateReserveren($nameP, $nameB, $ritjes, $id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("UPDATE reserveren SET nameP=:nameP, nameB=:nameB, ritjes=:ritjes WHERE id=:id");
    $stmt->bindParam(":nameP" , $nameP);
	$stmt->bindParam(":nameB" , $nameB);
	$stmt->bindParam(":ritjes" ,  $ritjes);
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
    $conn = null;
    return $stmt; 
 }

?>