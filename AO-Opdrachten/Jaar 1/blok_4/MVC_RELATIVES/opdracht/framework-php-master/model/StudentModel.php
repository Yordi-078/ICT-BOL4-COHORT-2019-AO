<?php

function getAllBezoekers() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM bezoekers";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createBezoeker($name, $adres, $telefoonnummer, $identificatienummer){
	$conn= openDatabaseConnection();
	$stmt = $conn->prepare("INSERT INTO bezoekers (name, adres, telefoonnummer, identificatienummer) VALUES (:name, :adres, :telefoonnummer, :identificatienummer)");
	$stmt->bindParam(":name" , $name);
	$stmt->bindParam(":adres" , $adres);
	$stmt->bindParam(":telefoonnummer" , $telefoonnummer);
	$stmt->bindParam(":identificatienummer" , $identificatienummer);
	$stmt->execute();
	   }
	   
	   
function getBezoekerById($id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("SELECT * from bezoekers where id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();

}

function deleteBezoeker($id){
    $conn= openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM bezoekers where id = :id ");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
 }

 function updateBezoeker($name, $adres, $telefoonnummer, $identificatienummer, $id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("UPDATE bezoekers SET name=:name, adres=:adres, telefoonnummer=:telefoonnummer, identificatienummer=:identificatienummer WHERE id=:id");
    $stmt->bindParam(":name" , $name);
	$stmt->bindParam(":adres" , $adres);
	$stmt->bindParam(":telefoonnummer" ,  $telefoonnummer);
	$stmt->bindParam(":identificatienummer" , $identificatienummer);
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
    $conn = null;
    return $stmt; 
 }


