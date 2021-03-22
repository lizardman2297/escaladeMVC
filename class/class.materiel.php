<?php


class materiel
{
    protected $nom;
    protected $reference;
    protected $dateAchat;
    protected $marque;
    protected $quantite;
    protected $prix;
    protected $commentaire;
    protected $status;
    protected $type;
    protected $proprietaire;
    protected $imageUrl;

    /**
     * materiel constructor.
     * @param $nom
     * @param $reference
     * @param $dateAchat
     * @param $marque
     * @param $quantite
     * @param $prix
     * @param $commentaire
     * @param status $status
     * @param type $type
     * @param proprietaire $proprietaire
     */
    public function __construct($nom, $reference, $dateAchat, $marque, $quantite, $prix, $commentaire, $status, $type, $proprietaire, $imageUrl)
    {
        $this->nom = $nom;
        $this->reference = $reference;
        $this->dateAchat = $dateAchat;
        $this->marque = $marque;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->commentaire = $commentaire;
        $this->status = $status;
        $this->type = $type;
        $this->proprietaire = $proprietaire;
        $this->imageUrl = $imageUrl;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * @param mixed $dateAchat
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuatite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param proprietaire $proprietaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }


}