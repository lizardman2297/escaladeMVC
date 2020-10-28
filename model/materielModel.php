<?php
    require_once("model/model.php");
    require_once("model/materielModel.php");

    function getTypeMateriel(){
        $db = dbConnect();
        $req = "SELECT libelleType FROM typeMateriel ORDER BY id";
        $pdo = $db->query($req);
        while ($type = $pdo->fetchObject()) {
            $element[] = $type->libelleType;
        }
        return $element;
    }

    function getMateriel($type){
        $db = dbConnect();
        $req = "SELECT * FROM materiel m WHERE m.type = (SELECT id FROM typeMateriel WHERE libelleType = '$type')";
        $pdo = $db->query($req);
        while ($type = $pdo->fetchObject()) {
            $element[] = $type;
        }
        return $element;
    }