<?php
include_once "../Connexion.php";

class participantC
{
    function jeparticipe($e)
    {
        $sql = "INSERT INTO participant(nom,id_e) VALUES (:nom,:id_e)";
        $db = Connect::getConnection();
        try {
            $pre = $db->prepare($sql);
            $nom= $e->getNom();
            $id_e = $e->getIdE();
            $pre->bindValue(':nom', $nom);
            $pre->bindValue(':id_e', $id_e);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }
    }
    function existance($nom,$id_e)
    {
        $sql = "SELECT nom from participant where `nom`='$nom' and `id_e`='$id_e'";
            $db = Connect::getConnection();
            try
            {
                $pre=$db->prepare($sql);
                $pre->execute();
                $array = $pre->fetchALL();
                $nb = count($array);
                return $nb;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }

    }
}
?>