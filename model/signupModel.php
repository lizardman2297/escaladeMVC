<?php

    require_once("model/model.php");
    require_once("model/loginModel.php");

    function userSignUp(string $username) {
        if (!userExist($username)) {
            if ($_POST["password"] === $_POST["passwordVerfi"]) {
                $passCrypt = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $db = dbConnect();
                $req = "INSERT INTO user (username, password) VALUES ('$username', '$passCrypt')";
                $pdo = $db->query($req);
                $_SESSION["username"] = $username;
                header("location: index.php");
            }
        } else {
            header("location: index.php");
        }
    }