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
        return new PDO('mysql:host=localhost;dbname=escaladeMVC;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        return die('Erreur : '.$e->getMessage());
    }

};

