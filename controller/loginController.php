<?php

    require_once("model/loginModel.php");

    function userLogin(string $username)
    {
        if (userExist($username)) {
            if (passwordUserVerify($username, $_POST["password"])) {
                $_SESSION["username"] = $username;
                header('location: index.php');
            } else {
                header('location: index.php');
            }
        } else {
            header('location: index.php');
        }
    }



    function login()
    {
        require_once("view/user/form/login.php");
    }

    