<?PHP
include_once "../core/promotion_core.php";
$prom=new promotion_core();
if (isset($_POST["id_promo"]))
{
    $prom->supprimerPromotion($_POST["id_promo"]);
    header('Location: afficherPromotion.php');
}

?>