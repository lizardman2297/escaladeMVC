<?php

    require_once("model/loginModel.php");

    function userLogin(string $username)
    {
        if (userExist($username)) {
            $_SESSION["username"] = $username;
        }
    }

    function login()
    {
        require_once("view/user/form/login.php");
    }

