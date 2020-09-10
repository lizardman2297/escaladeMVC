<?php
    session_start();
        
    if (isset($_SESSION["username"])) {
        require_once("controller/controller.php");
        require_once("controller/userController.php");
        require_once("template/menu.php");
        if (isset($_GET["module"])) {
            if ($_GET["module"] == "dashboard") {
                require_once("controller/dashboardController.php");
                echo dashboard();
            } elseif ($_GET["module"] == "materiel") {
                echo listMateriel();
            }elseif ($_GET["module"] == "user") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "logout") {
                        userLogout();
                    }
                }
            }
        } else {
            header('location: index.php?module=dashboard');
        }
    } else {
        require_once("controller/userController.php");
        if (isset($_GET["module"])) {
            if ($_GET["module"] == "user") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "login") {
                        userLogin($_POST["username"]);
                    }
                }
            }
        }else {
            echo login();
        }
    }