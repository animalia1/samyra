<?php
class participant
{

    private $nom;
    private $id_e;

    /**
     * participant constructor.
     * @param $nom
     * @param $id_e
     */
    public function __construct( $nom, $id_e)
    {
        $this->nom = $nom;
        $this->id_e = $id_e;
    }

    /**
     * @return mixed
     */

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
    public function getIdE()
    {
        return $this->id_e;
    }

    /**
     * @param mixed $id_e
     */
    public function setIdE($id_e)
    {
        $this->id_e = $id_e;
    }


}
?>