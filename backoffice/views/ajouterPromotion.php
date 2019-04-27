<?PHP
include "../entities/promotion.php";
include "../core/promotion_core.php";
if (isset($_POST['id_promo']) and isset($_POST['id_produit']) and isset($_POST['valeur']) and isset($_POST['dated'] ) and isset($_POST['datef'])and  $_POST['id_promo']!=null
    and  $_POST['id_produit']!=null   and  $_POST['valeur']!=null  and  $_POST['dated']!=null and  $_POST['datef']!=null  )
{
    $id_promo=$_POST['id_promo'];
    $id_produit=$_POST['id_produit'];
    $valeur=$_POST['valeur'];
    $dated=$_POST['dated'];
    $datef=$_POST['datef'];


    $today=date("Y-m-d");

    if($dated<$datef and $dated>=$today )

    {

        $prom1=new promotion($id_promo,$id_produit,$valeur,$dated,$datef);

        $prom1C=new promotion_core();
        $prom1C->ajouterPromotion($prom1);
        //$nb=$event1C->calculPeriode($evenement1);

        header('Location: afficherPromotion.php');
        //echo $event1C->calculPeriode($event1);




    }

    else

    {
        ?>

        <script>


            alert("verifier dates");


        </script>
        <?php
    }

}


else{ echo "vérifier les champs"; }

//*/
?>