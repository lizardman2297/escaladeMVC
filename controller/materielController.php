<?php

function listeMaterielActuel(){
    $title = "Liste materiel actuel";

    require_once("view/materiel/materielActuelView.php");
}

function listeMaterielSouhait(){
    $title = "Liste de souhait";

    require_once("view/materiel/materielListeSouhaitView.php");
}

function ajoutMateriel(){
    $title = "Ajouter materiel";

    require_once("view/materiel/materielAjoutView.php");
}