<?php
include_once "../Connexion.php";
class events_core
{
    function ajouterEvenement($e)
    {
        $sql = "INSERT INTO evenements(nom,date_deb,date_fin,description,nbre_limit,image) VALUES (:nom,:date_deb,:date_fin,:description,:nbre_limit,:image)";
        $db = Connect::getConnection();
        try {
            $pre = $db->prepare($sql);
            $nom = $e->getEventName();
            $date_deb = $e->getDateDeb();
            $date_fin = $e->getDateFin();
            $description = $e->getDescription();
            $nbre_limit = $e->getNbreLimit();
            $image = $e->getImage();
            $pre->bindValue(':nom', $nom);
            $pre->bindValue(':date_deb', $date_deb);
            $pre->bindValue(':date_fin', $date_fin);
            $pre->bindValue(':description', $description);
            $pre->bindValue(':nbre_limit', $nbre_limit);
            $pre->bindValue(':image', $image);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }


    }

    function afficherEvenement()
    {
        $sql="SELECT * From evenements";
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
    function calculPeriode($evenementt)
    {



        $nbjours = round  ( (strtotime($evenement->getDateDeb()) - strtotime($evenement->getDateFin()))/(60*60*24)-1);
        echo $nbjours;
    }


    /****************************************************************************************************/

    function recupererEvenement($id)

    {
        $sql="SELECT * from evenements where id=$id";
        $db = Connect::getConnection();
        try
        {
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerEvenement($nom)
    {
        $sql="DELETE FROM evenements where $nom= :nom";
        $db = Connect::getConnection();
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$nom);
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

    function modifierEvenement($event,$id)
    {
        $sql="UPDATE evenements SET  nom=:nom,date_deb=:date_deb,date_fin=:date_fin,description=:description,nbre_limit=:nbre_limit,image=:image WHERE nom=:nom";

        $db = Connect::getConnection();
        // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {
            $req=$db->prepare($sql);

            $nom=$event->getEventName();
            $date_deb=$event->getDateDeb();
            $date_fin=$event->getDateFin();
            $description=$event->getDescription();
            $nbre_limit = $event->getNbreLimit();
            $image=$event->getImage();
           // $datas = array(':nom'=>$nom,':date_deb'=>$date_deb,':date_fin'=>$date_fin,':description'=>$description,':nbre_limit'=>$nbre_limit,':image'=>$image);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':date_deb', $date_deb);
            $req->bindValue(':date_fin', $date_fin);
            $req->bindValue(':description', $description);
            $req->bindValue(':nbre_limit', $nbre_limit);
            $req->bindValue(':image', $image);


            $req->execute();



            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
          //  echo " Les datas : " ;
         //   print_r($datas);
        }

    }
    /*********************************************************************************/
function participer($id)
{
    $db = Connect::getConnection();
    $sql_info_author = $db->query("SELECT * FROM `evenements` WHERE `id`='$id'");
    $data_author = $sql_info_author -> fetch();
    $nb_msg = $data_author['nbre_part'] + 1;
    $sql_add_author = $db->query("UPDATE `evenements` SET `nbre_part`='$nb_msg' WHERE `id`='$id'");

}

}
?>