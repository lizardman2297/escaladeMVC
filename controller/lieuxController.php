<?php

function listeLieux(){
    $title = "Liste lieux";

    require_once("view/lieux/lieuxListeView.php");
}

function ajouterLieux(){
    $title = "Ajouter lieux";

    require_once("view/lieux/lieuxAjoutView.php");
}