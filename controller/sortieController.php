<?php

function listeSortie(){
    $title = "Liste sortie";

    require_once("view/sortie/sortieListeView.php");
}

function listeProchaineSortie(){
    $title = "Liste prochaine sortie";

    require_once("view/sortie/sortieProchaineListeView.php");
}

function ajoutSortie(){
    $title = "ajouter sortie";

    require_once("view/sortie/sortieAjoutView.php");
}

