<?php
include_once "../Connexion.php";

class clients_core
{
    function ajouterClient($e)
    {
        $sql = "INSERT INTO client VALUES (:nom_utilisateur,:email,:password)";
        $db = Connect::getConnection();
        try {
            $pre = $db->prepare($sql);
            $nom_utilisateur = $e->getNomUtilisateur();
            $email = $e->getEmail();
            $password= $e->getPassword();
            $pre->bindValue(':nom_utilisateur',$nom_utilisateur);
            $pre->bindValue(':email', $email);
            $pre->bindValue(':password',$password);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }


    }

    function afficherClient()
    {
        $sql="SELECT * From client";
        $db = Connect::getConnection();
        try
        {
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    /***********************************************************************************************************/

    function rechercherClient($nom_utilisateur,$password)
    {

        $sql = "SELECT nom_utilisateur from client where `nom_utilisateur`='$nom_utilisateur' and `password`='$password'";
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
    /****************************************************************************************************/
    function recupererClient($nom_utilisateur,$password)

    {
        $sql="SELECT nom_utilisateur FROM client WHERE nom_utilisateur=$nom_utilisateur AND password=$password";
        $db = Connect::getConnection();
        try
        {

            $liste=$db->query($sql);
            $array = $req->fetchALL();
            $nb = count($array);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

/************************************************************************************************************/
    function supprimerClient($nom_utilisateur)
    {
        $sql="DELETE FROM client where nom_utilisateur= :nom_utilisateur";
        $db = Connect::getConnection();
        $req=$db->prepare($sql);
        $req->bindValue(':nom_utilisateur',$nom_utilisateur);
        try
        {
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    /*******************************************************************************************/

    function modifierClient($event,$nom_utilisateur)
    {
        $sql="UPDATE client SET  nom_utilisateur=:nom_utilisateur,email=:email,password=:password WHERE nom_utilisateur=:nom_utilisateur";

        $db = Connect::getConnection();
        // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {
            $req=$db->prepare($sql);
            $nom_utilisateur=$event->getNomUtilisateur();
            $email=$event->getEmail();
            $password=$event->getPassword();


            $datas = array(':nom_utilisateur'=>$nom_utilisateur, ':email'=>$email,':password'=>$password);

            $req->bindValue(':nom_utilisateur',$nom_utilisateur);
            $req->bindValue(':email',$email);
            $req->bindValue(':password',$password);
            $s=$req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
    /*********************************************************************************/


}

?>