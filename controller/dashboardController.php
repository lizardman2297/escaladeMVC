<?php

function dashboard() {
    require_once("model/dashboardModel.php");
    
    $title = 'Dashboard';
    $points = getScore();

    require_once('view/dashboardView.php');
}