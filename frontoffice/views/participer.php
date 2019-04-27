<?PHP
session_start();
include "../../backoffice/core/events_core.php";
include_once "../core/participantC.php";
include_once "../entities/participant.php";
require ("authentif_class.php");
$nom=$_SESSION['Auth']['username'];
$pC=new participantC();
$produitsC=new events_core();
if (isset($_POST["id"]))
{
    $result=$produitsC->recupererEvenement($_POST['id']);
    foreach($result as $row)
    $p=new participant($nom,$row['id']);
    $x=$pC->existance($nom,$row['id']);
    if($x==0)
    {
        $pC->jeparticipe($p);
        $nbre_limit = $row['nbre_limit'];
        $nbre_part = $row['nbre_part'];
        $verif = $nbre_limit - $nbre_part;
        if ($verif > 0)
        {
            $produitsC->participer($_POST["id"]);
            header('Location: sendmail/index.php');
        }
    }
    else
    {
        echo "il existe deja";

    }

}


?>







