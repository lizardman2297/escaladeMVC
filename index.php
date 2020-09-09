<?php
    session_start();
        
    if (isset($_SESSION["username"])) {
        require_once("controller/controller.php");
        require_once("controller/userController.php");
        require_once("template/menu.php");
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "materiel") {
                echo listMateriel();
            }elseif ($_GET["action"] == "userLogout") {
                userLogout();
            }
        }
    } else {
        require_once("controller/userController.php");
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "userLogin") {
                userLogin($_POST["username"]);
            }
        }else {
            echo login();
        }
    }