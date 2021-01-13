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
            $element[$nb]["latitude"] = $lieux->coordoneesX;
            $element[$nb]["longitude"] = $lieux->coordoneesY;
            $nb += 1;
        }
        return $element;
    }

    function getVille($idVille){
        $db = dbConnect();
        $req = "SELECT libelleVille FROM ville WHERE id = '$idVille'";
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