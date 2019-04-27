<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Winkle I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <!-- Data table CSS -->
    <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?PHP
include_once 'header.php';
if (isset($_GET["nom"])){
    $livreur2C=new events_core();
    $livreur2C->supprimerEvenement($_GET["nom"]);

    while (ob_get_status())
    {
        ob_end_clean();
    }

    echo "<script type='text/javascript'>window.location.href = 'afficherEvenement.php?success=1';</script>";
}
?>

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Export</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>abouts events</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <?PHP
                include_once "../core/events_core.php";
                $produits1C=new events_core();
                $listeProduits=$produits1C->afficherEvenement();

                //var_dump($listeProduits->fetchAll());
                ?>
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <form>
                                        <table id="example" class="table table-hover display  pb-30" >

                                            <thead>

    <tr>
        <th >image</th>
        <th >Name of events</th>
        <th >start date</th>
        <th >end date</th>
        <th >Description</th>
        <th >number of participants</th>

    </tr>
    </thead>

    <?PHP
    foreach($listeProduits as $row){
        ?>
        <tr>
            <td><?PHP  echo '<img src="img/' . $row["image"] . '">';?> </td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['date_deb']; ?></td>
            <td><?PHP echo $row['date_fin']; ?></td>
            <td><?PHP echo $row['description']; ?></td>
            <td><?PHP echo $row['nbre_limit']; ?> </td>
            <td><form method="POST" action="supprimerEvenement.php">
                    <input type="submit" name="supprimer" value="supprimer">

                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                </form>

            </td>


            <td><a href="?edit=1&id=<?PHP echo $row['id']; ?>" data-toggle="modal"  class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="afficherEvenement.php?nom=<?PHP echo $row['nom']; ?>" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>



        </tr>
        <?PHP
    }
    ?>
</table>
                                            <input type="button" value="Imprimer" onClick="window.print()">

                                        </form>


                            </div>
                                <script type="text/javascript">
                                    var max=0;
                                    function disableButton(btn)

                                    {
                                        max++;

                                        if(max==2)
                                        {
                                            document.getElementById(btn.id).disabled = true;
                                            btn1.style.color="red";

                                        }


                                    }
                                </script>

                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

</div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Owl JavaScript -->
    <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Switchery JavaScript -->
    <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>


    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>

</html>
