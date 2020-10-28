<?php

function listeMaterielActuel(){
    require_once("model/materielModel.php");
    $title = "Liste materiel actuel";
    $type = getTypeMateriel();

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