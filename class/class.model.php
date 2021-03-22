<?php


class model
{
    protected $db;

    /**
     * model constructor.
     */
    public function __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=escaladeMVC;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            $this->db = ('Erreur : '.$e->getMessage());
        }
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db;
    }


}