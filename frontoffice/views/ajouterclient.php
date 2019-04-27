<?PHP
include "../entities/client.php";
include "../core/clients_core.php";
if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password1']) and  isset($_POST['password2']) and  $_POST['username']!=null and  $_POST['email']!=null   and  $_POST['password1']!=null  and  $_POST['password2']!=null  )
{
    $nom=$_POST['username'];
    $email=$_POST['email'];
    $password1=sha1($_POST['password1']);
    $password2=sha1($_POST['password2']);

    if( $password1==$password2 )

    {


        //$nb=$event1C->calculPeriode($evenement1);

        header('Location: formulaire_validation.html');
        //echo $event1C->calculPeriode($event1);




    }

    else {
        ?>

        <script>


            alert("verifier le mot de passe");


        </script>
        <?php

    }

}


else{ echo "vérifier les champs"; }

//*/
?>