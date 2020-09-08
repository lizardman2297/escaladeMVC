<?php

/**
 * dbConnect
 * Crer la connection a la base de données
 * @return PDO
 */
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

/**
 * listMateriel
 *
 * @return string
 */
function listMateriel()
{
    return "future liste de materiel";
}