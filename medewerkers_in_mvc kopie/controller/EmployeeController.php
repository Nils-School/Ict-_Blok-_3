<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', $employees);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('employee/create');
    
}

function store($result){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $result = createEmployee($result['name'],$result['age']);
    //2. Bouw een url op en redirect hierheen
    header('Location: index');
}

function update($id){
    //1. Haal 1 medewerker op uit de database (via de model) en sla deze op in een variable
    $result = getEmployee($id); 
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render("employee/update", $result);
}

function updateAction($result, $id){
   
    $result = updateEmployee($result['name'],$result['age'],$id);
    
    header('Location: ../index');
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $result = getEmployee($id); 
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render("employee/delete", $result);
}

function destroy($id){
    //1. Delete een medewerker uit de database
    $result = deleteEmployee($id);
	//2. Bouw een url en redirect hierheen
    header('Location: ../index');
}
?>