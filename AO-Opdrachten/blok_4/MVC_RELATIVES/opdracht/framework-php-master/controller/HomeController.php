<?php

require(ROOT . "model/HomeModel.php");
require(ROOT . "model/StudentModel.php");
function index()
{
	$paarden= getAllPaarden();
    render('home/index', ['paarden' => $paarden]);

  
}



function createP(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
   render("home/createP");

}

function storeP(){
    $name = $_POST['name'];
    $leeftijd = $_POST['leeftijd'];
    $lengte = $_POST['lengte'];

	 createPaard($name, $leeftijd, $lengte);

	 
	 header("Location:" . URL . "home/index");

}

function deleteP($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
      $id = getPaardById($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('home/deleteP', ['id' => $id]);
}

function destroyP($id){
    //1. Delete een medewerker uit de database
    deletePaard($id);
	//2. Bouw een url en redirect hierheen
   header("Location:" . URL . "home/index");
}

function editP($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $id = getPaardById($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('home/updateP', ['id' => $id]);
}


function updateP(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $name=$_POST['name'];
    $leeftijd=$_POST['leeftijd'];
    $ras=$_POST['ras'];
    $lengte=$_POST['lengte'];
	$id = $_POST['id'];


	updatePaard($name, $leeftijd, $ras, $lengte, $id);
    //2. Bouw een url en redirect hierheen
    header("Location:" . URL . "home/index");

}


function indexR()
{
	$reserveren = getAllR();
    render('home/index', ['reserveren' => $reserveren]);

  
}



function planning(){
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('home/planning');
}

function reserveer(){
    $nameP = $_POST['nameP'];
    $nameB = $_POST['nameB'];
    $ritjes = $_POST['ritjes'];
 

	planner($nameP, $nameB, $ritjes);

	 
     header("Location:" . URL . "home/index");
}

function deleteR($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
      $id = getReserverenById($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('home/deleteR', ['id' => $id]);
}

function destroyR($id){
    //1. Delete een medewerker uit de database
    deleteReserveren($id);
	//2. Bouw een url en redirect hierheen
   header("Location:" . URL . "home/index");
}

function editR($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $id = getReserverenById($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('home/updateR', ['id' => $id]);
}


function updateR(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $nameP=$_POST['nameP'];
    $nameB=$_POST['nameB'];
    $ritjes=$_POST['ritjes'];
	$id = $_POST['id'];


	updateReserveren($nameP, $nameB, $ritjes, $id);
    //2. Bouw een url en redirect hierheen
    header("Location:" . URL . "home/index");

}


?>