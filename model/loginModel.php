<?php

    require_once("model.php");

    function userExist(string $username)
    {
        $db = dbConnect();
        $req = "SELECT COUNT(id) AS numbre FROM user WHERE username = '$username'";
        $pdo = $req->query($req);
        $result = $pdo->fetchObject();
        if ($result->nombre == 1) {
            return true;
        } else {
            return false;
        }
    }