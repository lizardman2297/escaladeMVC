<?php

function listeLieux(){
    require_once("model/lieuxModel.php");
    $title = "Liste lieux";
    $listeLieux = getAllLieux();
    require_once("view/lieux/lieuxListeView.php");
}

function ajouterLieux(){
    $title = "Ajouter lieux";

    require_once("view/lieux/lieuxAjoutView.php");
}