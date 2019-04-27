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

    <!-- Data table CSS -->
    <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?PHP
include ('header.php');
include "../entities/promotion.php";
include "../core/promotion_core.php";
if (isset($_GET['id_promo'])){
    $produitsC1=new promotion_core();
    $result=$produitsC1->recupererPromotion($_GET['id_promo']);
    foreach($result as $row){
        $id_promo=$row['id_promo'];
        $id_produit=$row['id_produit'];
        $valeur=$row['valeur'];
        $date_deb=$row['date_deb'];
        $date_fin=$row['date_fin'];

        ?>


<!-- debut du formulaire -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">add Promotion</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#"><span>e-commerce</span></a></li>
                    <li class="active"><span>add-events</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
        <form method="POST">
            <table>

                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                    <LABEL class="control-label mb-10 text-left">id promotion</LABEL>
                    <input type="number" class="form-control" name="id_promo" value="<?PHP echo $id_promo ?>">
                        </div>

                </tr>
                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                    <label class="control-label mb-10 text-left">id product</label>
                    <input type="number"  class="form-control" name="id_produit" value="<?PHP echo $id_produit ?>">
                        </div>

                </tr>
                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                    <label class="control-label mb-10 text-left">value</label>
                    <input type="number"  class="form-control" name="valeur" value="<?PHP echo $valeur ?>">
                        </div>

                </tr>
                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                    <label class="control-label mb-10 text-left">stard date</label>
                    <input type="date" class="form-control" name="date_deb" value="<?PHP echo $date_deb ?>">
                        </div>

                </tr>
                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                    <label class="control-label mb-10 text-left">date of end</label>
                    <input type="date" class="form-control" name="date_fin" value="<?PHP echo $date_fin ?>">
                        </div>

                </tr>
                <tr>

                    <td></td>
                    <td><input type="hidden" class="form-control" name="id_ini" value="<?PHP echo $_GET['id_promo'];?>"></td>
                </tr>
                <tr>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <td></td>
                            <td><input type="submit" name="modifier" value="modifier"></td>
                        </div>

                </tr>

            </table>
        </form>
        <?PHP
    }
}
if (isset($_POST['modifier'])){
    $produits=new promotion($_POST['id_promo'],$_POST['id_produit'],$_POST['valeur'],$_POST['date_deb'],$_POST['date_fin']);
    $produitsC1->modifierPromotion($produits,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: afficherPromotion.php');
}

?>


<     <!-- /#wrapper -->

                                <!-- JavaScript -->

                                <!-- jQuery -->
                                <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

                                <!-- Bootstrap Core JavaScript -->
                                <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                                <!-- Data table JavaScript -->
                                <script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

                                <!-- Slimscroll JavaScript -->
                                <script src="dist/js/jquery.slimscroll.js"></script>

                                <!-- Progressbar Animation JavaScript -->
                                <script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
                                <script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

                                <!-- Fancy Dropdown JS -->
                                <script src="dist/js/dropdown-bootstrap-extended.js"></script>

                                <!-- Sparkline JavaScript -->
                                <script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

                                <!-- Owl JavaScript -->
                                <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

                                <!-- Switchery JavaScript -->
                                <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>

                                <!-- EChartJS JavaScript -->
                                <script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
                                <script src="../vendors/echarts-liquidfill.min.js"></script>

                                <!-- Vector Maps JavaScript -->
                                <script src="../vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
                                <script src="../vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
                                <script src="dist/js/vectormap-data.js"></script>

                                <!-- Toast JavaScript -->
                                <script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

                                <!-- Piety JavaScript -->
                                <script src="../vendors/bower_components/peity/jquery.peity.min.js"></script>
                                <script src="dist/js/peity-data.js"></script>

                                <!-- Morris Charts JavaScript -->
                                <script src="../vendors/bower_components/raphael/raphael.min.js"></script>
                                <script src="../vendors/bower_components/morris.js/morris.min.js"></script>
                                <script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

                                <!-- Init JavaScript -->
                                <script src="dist/js/init.js"></script>
                                <script src="dist/js/dashboard-data.js"></script>
                                <script src="dist/js/form1.js"></script>
</body>

</html>
