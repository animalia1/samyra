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

<?php include_once 'header.php';
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

						

									 <!--button de telechargement
											   <div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i>
											   	<span class="btn-text">Upload new image</span>
															<input type="file" class="upload">
														</div>

  											<button class="btn  btn-primary btn-rounded">je Particpe</button>
  											

					</div>
					  
				<div class="btn-group mr-10">
					<button class="btn btn-warning btn-anim"><i class="fa fa-shopping-cart"></i><span class="btn-text">add to cart</span></button>
												</div>-->


        


					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
										<form method="POST" action="ajouterEvenement.php">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about events</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<form class="f">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Event Name</label>
															<input type="text" name="nom" id="nom" class="form-control" placeholder="name of events" required>
														</div>
													</div>
													
												  
													
													<!--code pour preciser la date et l'heure-->
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">date of start</label>
															<div class='input-group date' id='datetimepicker1'>
																<input type='date' name="dated" id="dated" class="form-control" placeholder="enter end date of event" required/>
																<span class="input-group-addon">
																	<span class="fa fa-calendar"></span>
																</span>
															</div>
														</div>
													</div>
													

													<!--code pour preciser la date et l'heure-->
													<!--/span-->
															<!--code pour preciser la date et l'heure-->
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-right">date of end</label>
															<div class='input-group date' id='datetimepicker1'>
																<input type='date' name="datef" id="datef" class="form-control" placeholder="enter start date of event" required/>
																<span class="input-group-addon">
																	<span class="fa fa-calendar"></span>
																</span>
															</div>
														</div>
													</div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10 text-left ">Events Description</label>
                                                                    <input type="text" name="des" id="des" class="form-control" placeholder="enter event description" required>
                                                                </div>
                                                            </div>

												<!-- Row -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10 ">image name</label>
                                                    <input type="text" name="image" id="image" class="form-control" placeholder="enter le nom de l'image" required>
                                                </div>
                                            </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10 text-right">participants limited to:</label>
                                                                <input type="number" name="nbr_part" id="nbr_part" placeholder="number of participants" required>
                                                            </div>
                                                        </div>
													<!--/span-->
												<!--button je enregistrer-->
  											
  											<input class="btn  btn-primary btn-rounded" type="submit" id="" name="Save" value="Save" onclick="test()">
  											<!--button je enregistrer-->
                                                </div>
                                        </div>	<!--/span-->

										</form>

				<!--fin du formulaire-->

				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2019 &copy; ANIMALIA Pampered by Hencework</p>
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
