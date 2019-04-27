
<?php
include_once "../Connexion.php";
class promotion_core
{
    function ajouterPromotion($e)
    {


        $sql = "INSERT INTO promotion VALUES (:id_promo,:id_produit,:valeur,:date_deb,:date_fin)";
        $db = Connect::getConnection();
        try {
            $pre = $db->prepare($sql);
            $id_promo = $e->getIdPromo();
            $id_produit = $e->getIdProduit();
            $valeur = $e->getValeur();
            $date_deb = $e->getDateDeb();
            $date_fin = $e->getDateFin();
            $pre->bindValue(':id_promo', $id_promo);
            $pre->bindValue(':id_produit', $id_produit);
              $pre->bindValue(':valeur', $valeur);
            $pre->bindValue(':date_deb', $date_deb);
            $pre->bindValue(':date_fin', $date_fin);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }


    }

    function afficherPromotion()
    {
        $sql="SELECT * From promotion";
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
    function supprimerPromotion($id_promo)
    {
        $sql="DELETE FROM promotion where id_promo= :id_promo";
        $db = Connect::getConnection();
        $req=$db->prepare($sql);
        $req->bindValue(':id_promo',$id_promo);
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
    function recupererPromotion($id)

    {
        $sql="SELECT * from promotion where id_promo=$id";
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
    function modifierPromotion($e,$id_promo)
    {
        $sql="UPDATE promotion SET  id_promo=:id_promo,id_produit=:id_produit,valeur=:valeur,date_deb=:date_deb,date_fin=:date_fin WHERE id_promo=:id_promo";

        $db = Connect::getConnection();
        // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {
            $pre=$db->prepare($sql);

            $id_promo = $e->getIdPromo();
            $id_produit = $e->getIdProduit();
            $valeur = $e->getValeur();
            $date_deb = $e->getDateDeb();
            $date_fin = $e->getDateFin();

            $datas = array(':id_promo'=>$id_promo,':id_produit'=>$id_produit,':valeur'=>$valeur,':date_deb'=>$date_deb,':date_fin'=>$date_fin);

           $pre->bindValue(':id_promo', $id_promo);
            $pre->bindValue(':id_produit', $id_produit);
            $pre->bindValue(':valeur', $valeur);
            $pre->bindValue(':date_deb', $date_deb);
            $pre->bindValue(':date_fin', $date_fin);


            $s=$pre->execute();



            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
    function recuperervaleur()
    {
        $sql= "SELECT p.price , pro.valeur FROM produit p INNER JOIN promotion pro ON pro.id_promo = p.id";
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
    function Rechercherpromotion($Find)
    {

        $db=config::getConnection();
        $sql = "SELECT * FROM promotion WHERE id_promo like '%".$Find."%' or id_produit like '%".$Find."%' or valeur like '%".$Find."%' or date_deb like '%".$Find."%' or date_fin like '%".$Find."%'";
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

}
?>