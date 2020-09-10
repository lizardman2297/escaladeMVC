<?php


function getScore() {
    require_once("model/model.php");
    $db = dbConnect();
    $username = $_SESSION["username"];
    $req = "SELECT score FROM user WHERE username = '$username'";
    $pdo = $db->query($req);
    $result = $pdo->fetchObject();
    if ($result->score == 0) {
        return "0 point ";
    } else {
        return $result->score . " points ";

    }
}