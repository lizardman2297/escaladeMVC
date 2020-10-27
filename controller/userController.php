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

    // function userSignup()
    // {
    //     if (userExist($username)) {
    //         //TODO - verifier password + ajout base de donné + connetion auto
    //     } else {
    //         header('location: index.php');
    //     }
    // }
    
    function userLogout() {
        session_destroy();
        header('location: index.php');
    }

    function login()
    {
        require_once("view/user/form/login.php");
    }

    function signup()
    {
        if (isset($_POST["username"])) {
            require_once("model/signupModel.php");
            $username = $_POST["username"];
            userSignUp($username);
        } else {
            require_once("view/user/form/signUp.php");
        }
    }

    function userSetting(){
        require_once("view/user/userSettingView.php");
    }