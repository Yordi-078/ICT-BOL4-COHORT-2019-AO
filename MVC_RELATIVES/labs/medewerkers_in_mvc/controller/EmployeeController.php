<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', ['employees' => $employees]);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
   render("employee/create");

}

function store(){
    $name = $_POST['name'];
	$age = $_POST['age'];

	 createEmployee($name, $age);

	 
	 header("Location:" . URL . "employee/index");

}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $id = getEmployeeById($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('employee/update', ['id' => $id]);
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $name=$_POST['name'];
	$age=$_POST['age'];
	$id = $_POST['id'];


	updateEmployee($name, $age, $id);
    //2. Bouw een url en redirect hierheen
    header("Location:" . URL . "employee/index");

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
      $id = getEmployeeById($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('employee/delete', ['id' => $id]);
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteEmployee($id);
	//2. Bouw een url en redirect hierheen
   header("Location:" . URL . "employee/index");
}
?>