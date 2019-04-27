<?PHP
include "../entities/client.php";
include "../core/clients_core.php";
if (isset($_POST['exampleInputName_1']) and isset($_POST['exampleInputEmail_2']) and isset($_POST['exampleInputpwd_2']) and  isset($_POST['exampleInputpwd_3']) and  $_POST['exampleInputName_1']!=null and  $_POST['exampleInputEmail_2']!=null   and  $_POST['exampleInputpwd_2']!=null  and  $_POST['exampleInputpwd_3']!=null  )
{
    $nom=$_POST['exampleInputName_1'];
    $email=$_POST['exampleInputEmail_2'];
    $password=$_POST['exampleInputpwd_2'];
    $password2=$_POST['exampleInputpwd_3'];

    if( $password==$password2 )

    {

        $evenement1=new client($nom,$email,$password);

        $evenement1C=new clients_core();
        $evenement1C->ajouterClient($evenement1);
        //$nb=$event1C->calculPeriode($evenement1);

        header('Location: afficherEvenement.php');
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