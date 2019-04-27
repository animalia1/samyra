<?PHP
include "../core/events_core.php";
$produitsC=new events_core();
if (isset($_POST["id"]))
{
    $produitsC->supprimerEvenement($_POST["id"]);
    header('Location: afficherEvenement.php');
}

?>