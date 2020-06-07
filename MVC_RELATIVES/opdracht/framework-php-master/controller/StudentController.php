<?php

require(ROOT . "model/StudentModel.php");
function index()
{
    $bezoekers = getAllBezoekers();
    render('student/index', ['bezoekers' => $bezoekers]);
}


function createB(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
   render("student/createB");

}

function storeB(){
    $name = $_POST['name'];
    $adres = $_POST['adres'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $identificatienummer = $_POST['identificatienummer'];

	 createBezoeker($name, $adres, $telefoonnummer, $identificatienummer);

	 
	 header("Location:" . URL . "student/index");

}

function deleteB($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
      $id = getBezoekerById($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('student/deleteB', ['id' => $id]);
}

function destroyB($id){
    //1. Delete een medewerker uit de database
    deleteBezoeker($id);
	//2. Bouw een url en redirect hierheen
   header("Location:" . URL . "student/index");
}

function editB($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $id = getBezoekerById($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('student/updateB', ['id' => $id]);
}


function updateB(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $name=$_POST['name'];
    $adres=$_POST['adres'];
    $telefoonnummer=$_POST['telefoonnummer'];
    $identificatienummer=$_POST['identificatienummer'];
	$id = $_POST['id'];


	updateBezoeker($name, $adres, $telefoonnummer, $identificatienummer, $id);
    //2. Bouw een url en redirect hierheen
    header("Location:" . URL . "student/index");

}
