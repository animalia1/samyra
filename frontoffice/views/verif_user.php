<?PHP
session_start();
include_once "../entities/client.php";
include_once "../core/clients_core.php";
if (isset($_POST['username']) and isset($_POST['password'])  and  $_POST['username']!=null and  $_POST['password']!=null   )
{

    $nom=$_POST['username'];
    $password=sha1($_POST['password']);
    $client1=new clients_core();
$x=$client1->rechercherClient($nom,$_POST['password']);
    if($x>=1)

    {
        $_SESSION['Auth']=array(
            'username' => $nom,
            'password'=> $password
        );


        header('Location: index.php');
        echo $x;

    }

    else

    {
        ?>
        <script>
            alert("verifier le mot de passe");
        </script>
        <?php
    }

}


else{ echo "vérifier les champs"; }


?>