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
        require_once("controller/loginController.php");
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "userLogin") {
                userLogin($_POST["username"]);
            }
        }else {
            echo login();
        }
    }