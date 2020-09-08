<?php

session_start();

$_SESSION["username"] = "loris";

if (isset($_SESSION["username"])) {
    require_once("controller/controller.php");
    require_once("template/menu.php");
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "materiel") {
            echo listMateriel();
        }
    }
} else {
    //? you need auth 
    echo "you need auth";
}