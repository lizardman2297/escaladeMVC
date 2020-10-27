<?php
    session_start();
        
    if (isset($_SESSION["username"])) {
        require_once("template/menu.php");
        require_once("controller/controller.php");
        require_once("controller/userController.php");
        require_once("controller/dashboardController.php");
        require_once("controller/materielController.php");
        require_once("controller/sortieController.php");
        require_once("controller/lieuxController.php");
        
        if (isset($_GET["module"])) {
            if ($_GET["module"] == "dashboard") {
                dashboard();
            } elseif ($_GET["module"] == "materiel") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "actuel") {
                        listeMaterielActuel();
                    }elseif ($_GET["action"] == "future") {
                        listeMaterielSouhait();
                    }elseif ($_GET["action"] == "ajouter") {
                        ajoutMateriel();
                    }
                }else {
                    dashboard();
                }
            }elseif ($_GET["module"] == "sortie") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "liste") {
                        listeSortie();
                    }elseif ($_GET["action"] == "prochaine") {
                        listeProchaineSortie();
                    }elseif ($_GET["action"] == "ajouter") {
                        ajoutSortie();
                    }
                }else {
                    dashboard();
                }
            }elseif ($_GET["module"] == "lieux") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "liste") {
                        listeLieux();
                    }elseif ($_GET["action"] == "ajouter") {
                        ajouterLieux();
                    }
                }else {
                    dashboard();
                }
            }elseif ($_GET["module"] == "user") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "setting") {
                        userSetting();
                    }elseif ($_GET["action"] == "logout") {
                        userLogout();
                    }
                }else {
                    dashboard();
                }
            }
        } else {
            header('location: index.php?module=dashboard');
        }
    } else {
        if (isset($_GET["module"])) {
            if ($_GET["module"] == "user") {
                if (isset($_GET["action"])) {
                    if ($_GET["action"] == "login") {
                        userLogin($_POST["username"]);
                    } else if ($_GET["action"] == "signup") {
                        signup();
                    }
                }
            }
        }else {
            login();
        }
    }