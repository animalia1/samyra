<?PHP
include "../entities/evenement.php";
include "../core/events_core.php";
if (isset($_POST['dated']) and isset($_POST['datef'] ) and isset($_POST['des'])  and isset($_POST['nbr_part'])and isset($_POST['image'])
    and  $_POST['nom']!=null   and  $_POST['dated']!=null  and  $_POST['datef']!=null and  $_POST['des']!=null and  $_POST['nbr_part']!=null and $_POST['image']!=null ) {

    $nom = $_POST['nom'];
    $dated = $_POST['dated'];
    $datef = $_POST['datef'];
    $des = $_POST['des'];
    $nbr_part = $_POST['nbr_part'];
    $image = $_POST['image'];
    $today = date("Y-m-d");

    if ($dated < $datef and $dated >= $today) {

        $evenement1 = new evenement($nom, $dated, $datef, $des, $nbr_part, $image);

        $evenement1C = new events_core();
        $evenement1C->ajouterEvenement($evenement1);
        //  $nb=$evenement1C->calculPeriode($evenement1);
        header('Location: afficherEvenement.php');
        // echo $evenement1C->calculPeriode($evenement1);


    } else {
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