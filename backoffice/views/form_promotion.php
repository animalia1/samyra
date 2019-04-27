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

<?php include 'header.php' ;?>

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
            <!-- /Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <h6 class="txt-dark capitalize-font"><div class="zmdi zmdi-info-outline mr-10"></div>about promotion</h6>
                            <hr class="light-grey-hr"/>
    <form method="POST" action="ajouterPromotion.php">
        <div class="col-md-6">
            <div class="form-group">
        <label class="control-label mb-10 text-left">id promotion</label>
        <input type="number" name="id_promo"  id="id_promo"required>
            </div>
        </div>
        <br/>
        <div class="col-md-6">
            <div class="form-group">
        <label class="control-label mb-10 text-left">id produit</label>
        <input type="number" name="id_produit"  id="id_produit" required>
            </div>
        </div>
        <br/>
        <div class="col-md-6">
            <div class="form-group">
        <label class="control-label mb-10 text-left">valeur</label>
        <input type="number" name="valeur"  id="valeur" required>
            </div>
        </div>
        <br/>
        <div class="col-md-6">
            <div class="form-group">
            <label class="control-label mb-10 text-left">start promotion</label>
                <div class='input-group date' id='datetimepicker1'>
                <input type='date' name="dated" id="dated" class="form-control" placeholder="enter start date of promotion" required/>
        <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
        </span>
        </div>
            </div>
        </div>
        <br/>
        <div class="col-md-6">
            <div class="form-group">
        <label class="control-label mb-10 text-left">end promotion</label>
        <div class='input-group date' id='datetimepicker1'>
        <input type='date' name="datef" id="datef" class="form-control" placeholder="enter end date of promotion" required/>
        <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
        </span>
            </div>
            </div>
        </div>
        <!--/span-->
        <!--button je enregistrer-->
        <input class="btn  btn-primary btn-rounded" type="submit" id="" name="Save" value="Save" onclick="test()">
        <!--button je enregistrer-->
        <!--/span-->

    </form>
                            </div>
                    </div>
<!-- Footer -->
<footer class="footer container-fluid pl-30 pr-30">
    <div class="row">
        <div class="col-sm-12">
            <p>2018 &copy; Winkle. Pampered by Hencework</p>
        </div>
    </div>
</footer>
<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../vendors/bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="../vendors/bower_components/editable-table/numeric-input-example.js"></script>
<script src="dist/js/editable-table-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>


</body>

</html>
