<?php
    require_once("model/model.php");
    require_once("model/materielModel.php");
    require_once("model/userModel.php");
    require_once("class/class.type.php");
    require_once("class/class.model.php");


function getTypeMateriel(): array
    {
        $db = new model();
        $db = $db->getDb();

        $req = "SELECT libelleType FROM typeMateriel ORDER BY id";
        $pdo = $db->query($req);
        $element = [];
        while ($type = $pdo->fetchObject()) {
            $element[] = new type($type->libelleType);
        }
        return $element;
    }

    function getMateriel($type){
        $db = dbConnect();
        $userId = getUserId(getCurrentUsername());
        $type = $type->getNom();
        $req = "SELECT * FROM materiel m WHERE m.proprietaire = '$userId' AND m.type = (SELECT id FROM typeMateriel WHERE libelleType = '$type') ";
        $pdo = $db->query($req);
        if ($pdo->fetchObject() == false) {
            $element[] = false;
        } else {
            $element = [];
            while ($type = $pdo->fetchObject()) {
                $element[] = $type;
            }
        }
        return $element;

    }

//    function uploadFile(){
//
//
//    }