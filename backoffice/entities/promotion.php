<?php
include_once "../Connexion.php";
class promotion
{
    private $id_promo;
    private $id_produit;
    private $valeur;
    private $date_deb;
    private $date_fin;

    /**
     * promotion constructor.
     * @param $id_promo
     * @param $id_produit
     * @param $valeur
     * @param $date_deb
     * @param $date_fin
     */
    public function __construct($id_promo, $id_produit, $valeur, $date_deb, $date_fin)
    {
        $this->id_promo = $id_promo;
        $this->id_produit = $id_produit;
        $this->valeur = $valeur;
        $this->date_deb = $date_deb;
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getIdPromo()
    {
        return $this->id_promo;
    }

    /**
     * @param mixed $id_promo
     */
    public function setIdPromo($id_promo)
    {
        $this->id_promo = $id_promo;
    }

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->id_produit;
    }

    /**
     * @param mixed $id_produit
     */
    public function setIdProduit($id_produit)
    {
        $this->id_produit = $id_produit;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

    /**
     * @param mixed $date_deb
     */
    public function setDateDeb($date_deb)
    {
        $this->date_deb = $date_deb;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }


}
?>