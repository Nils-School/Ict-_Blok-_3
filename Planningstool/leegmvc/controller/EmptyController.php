<?php
require(ROOT . "model/EmptyModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    render('empty/index', []);
}