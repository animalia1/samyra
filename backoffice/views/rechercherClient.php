<?PHP
include_once "../core/clients_core.php";
$produitsC=new clients_core();
if (isset($_POST["username"]) and isset($_POST["password"]))
{
    $produitsC->rechercherClient($_POST['username']);
    header('Location: afficherEvenement.php');
}

?>