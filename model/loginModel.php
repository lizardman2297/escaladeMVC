<?php

    require_once("model.php");

    function userExist(string $username)
    {
        $db = dbConnect();
        $req = "SELECT COUNT(id) AS numbre FROM user WHERE username = '$username'";
        $pdo = $db->query($req);
        $result = $pdo->fetchObject();
        if ($result->numbre == 1) {
            return true;
        } else {
            return false;
        }
    }

    function passwordUserVerify(string $username, string $passwordEnter) {
        $db = dbConnect();
        $req = "SELECT password AS userPassword FROM user WHERE username = '$username'";
        $pdo = $db->query($req);
        $result = $pdo->fetchObject();
        if (password_verify($passwordEnter, $result->userPassword)) {
            return true;
        } else {
            return false;
        }
    }