<?php

session_start();

if (isset($_SESSION["username"])) {
    require_once("controller/controller.php");
    require_once("template/menu.php");
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "materiel") {
            echo listMateriel();
        }
    }
} else {
    if (!isset($_GET["action"])) {
        require_once("controller/loginController.php");
        echo login();
    }

}