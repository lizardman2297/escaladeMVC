<?php
function dbConnect()
{
    try
    {
        return PDO('mysql:host=localhost;dbname=escaladeMVC;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

};

function listMateriel()
{
    return "future liste de materiel";
}