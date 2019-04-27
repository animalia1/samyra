<DOCTYPE html xmlns="http://www.w3.org/1999/html">
    <html>
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
        include_once "../Core/promotion_core.php";
        $produits1C=new promotion_core();
        $listeProduits=$produits1C->Rechercherpromotion($_POST['Find']);
    ?>

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Details Promotion</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>Details Promotion</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <div class="search-bar">
                <div class="search-icon">
                    <i class="material-icons">search</i>
                </div>
                <form  role="form" method="POST" class="search-widget" action="rechercherpromotion.php">
                    <input type="text" name="Find" placeholder="START TYPING..." autocomplete="on">
                    <?php if (isset($_POST[ 'Find'])) $value=$_POST['Find']; else $value="" ; ?>
                    <div class="close-search">
                        <i class="material-icons">close</i>
                    </div>
                </form>
                <div/>
                <form>
                    <table id="example" class="table table-hover display  pb-30" >                    <thead>
                        <tr>
                            <td>id promotion</td>
                            <td>id produit</td>
                            <td>valeur promotion</td>
                            <td>debut promotion</td>
                            <td>fin promotion</td>

                        </tr>
                        </thead>

                        <tbody>
                        <?PHP
                        foreach($listeProduits as $row){
                        ?>

                        <tr>
                            <td><?PHP echo $row['id_promo']; ?></td>
                            <td><?PHP echo $row['id_produit']; ?></td>
                            <td><?PHP echo $row['valeur']; ?></td>
                            <td><?PHP echo $row['date_deb']; ?></td>
                            <td><?PHP echo $row['date_fin']; ?></td>
                            <td><form method="POST" action="supprimerPromotion.php">
                                    <input type="submit" name="supprimer" value="supprimer">
                                    <input type="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
                                </form>
                            </td>
                            <td><a href="modifierPromotion.php?id_promo=<?PHP echo $row['id_promo']; ?>">
                                    Modifier</a></td>
                        </tr>

            </div>
            <?PHP
            }
            ?>
            </tbody>
            </table>
            <input type="button" value="Imprimer" onClick="window.print()">

            </form>
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
