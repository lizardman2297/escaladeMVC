<?php
    require_once("model/model.php");

    function getAllLieux(){
        $db = dbConnect();
        $req = "SELECT * FROM lieux ORDER BY id";
        $pdo = $db->query($req);
        $nb = 0;
        while ($lieux = $pdo->fetchObject()) {
            $element[$nb]["libelle"] = $lieux->libelleLieu;
            $element[$nb]["ville"] = getVille($lieux->ville)->libelleVille;
            $element[$nb]["departement"] = getDepartement(getVille($lieux->ville)->departement)->libelleDepartement . " - " . getVille($lieux->ville)->departement;
            $element[$nb]["latitude"] = $lieux->coordoneesX;
            $element[$nb]["longitude"] = $lieux->coordoneesY;
            $nb += 1;
        }
        return $element;
    }

    function getAllDepartements() {
        $db = dbConnect();
        $req = "SELECT * FROM departement ORDER BY id";
        $pdo = $db->query($req);
        while ($departement = $pdo->fetchObject()) {
            $element[] = $departement;
        }
        return $element;
    }

    function getVille($idVille){
        $db = dbConnect();
        $req = "SELECT * FROM ville WHERE id = '$idVille'";
        $pdo = $db->query($req);
        return $pdo->fetchObject();
    }

    function getDepartement($idDepartement){
        $db = dbConnect();
        $req = "SELECT * FROM departement WHERE id = '$idDepartement'";
        $pdo = $db->query($req);
        return $pdo->fetchObject();
    }

    function getLieux($lieux){
        $db = dbConnect();
        $req = "";
        $pdo = $db->query($req);
        while ($type = $pdo->fetchObject()) {
            $element[] = $lieux;
        }
        return $element;
    }

    function uploadFile(){
        

    }