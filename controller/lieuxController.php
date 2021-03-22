<?php

function listeLieux(){
    require_once("model/lieuxModel.php");
    $title = "Liste lieux";
    $listeLieux = getAllLieux();
    require_once("view/lieux/lieuxListeView.php");
}

function ajouterLieux(){
    require_once("model/lieuxModel.php");

    $title = "Ajouter lieux";
    $departement = getAllDepartements();

    require_once("view/lieux/lieuxAjoutView.php");
}