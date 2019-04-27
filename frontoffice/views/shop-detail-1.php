<?php
session_start();
include_once "../Connexion.php";
require ("authentif_class.php");
if(Auth::estconnecter())
{
}
else
{
    header('Location: authentification.php');
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop Detail 1 | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
    <body>
<?php
include('header.php');
include "../../backoffice/core/events_core.php";
include_once "../../backoffice/entities/evenement.php";
if (isset($_GET['id'])){
$produitsC1=new events_core();
$result=$produitsC1->recupererEvenement($_GET['id']);
foreach($result as $row){
$id=$row['id'];
$nom=$row['nom'];
$date_deb=$row['date_deb'];
$date_fin=$row['date_fin'];
$description=$row['description'];
$nbre_limit=$row['nbre_limit'];
$image=$row['image'];
    echo $description;
?>
    <?PHP
}
}

?>

<
<footer id="footer" class="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="footer-newsletter-wrap">
                <h3 class="footer-newsletter-heading">NEWSLETTER</h3>
                <form class="mailchimp-form">
                    <div class="mailchimp-form-content clearfix">
                        <label for="subscribe_email" class="hide">Subscribe</label>
                        <input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
                        <button type="submit" class="btn mailchimp-submit">sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-featured">
        <div class="container">
            <div class="row">
                <div class="footer-featured-col col-md-4 col-sm-6">
                    <i class="fa fa-money"></i>
                    <h4 class="footer-featured-title">
                        100% <br> return money
                    </h4>
                    free return standard order in 30 days
                </div>
                <div class="footer-featured-col col-md-4 col-sm-6">
                    <i class="fa fa-globe"></i>
                    <h4 class="footer-featured-title">
                        world wide <br> delivery
                    </h4>
                    free ship for payment over $100
                </div>
                <div class="footer-featured-col col-md-4 col-sm-6">
                    <i class="fa fa-clock-o"></i>
                    <h4 class="footer-featured-title">
                        24h <br> shipment
                    </h4>
                    for standard package
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wrap">
                <div class="row">
                    <div class="footer-widget-col col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <ul class="address">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <h4>Address:</h4>
                                        <p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <h4>Phone:</h4>
                                        <p>(00) 123 456 789</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <h4>Email:</h4>
                                        <p><a href="mailto:email@domain.com">email@domain.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-3 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">
                                <span>infomation</span>
                            </h3>
                            <div class="menu-infomation-container">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Term &#038; Conditions</a></li>
                                    <li><a href="#">Gift Voucher</a></li>
                                    <li><a href="#">BestSellers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-3 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">
                                <span>Customer Care</span>
                            </h3>
                            <div class="menu-customer-care-container">
                                <ul class="menu">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h3 class="widget-title">
                                <span>open house</span>
                            </h3>
                            <div class="textwidget">
                                <ul class="open-time">
                                    <li><span>Mon - Fri:</span><span>8am - 5pm</span> </li>
                                    <li><span>Sat:</span><span>8am - 11am</span> </li>
                                    <li><span>Sun: </span><span>Closed</span></li>
                                </ul>
                                <h3 class="widget-title">
                                    <span>payment Menthod</span>
                                </h3>
                                <div class="payment">
                                    <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                                    <a href="#"><i class="fa fa-cc-visa"></i></a>
                                    <a href="#"><i class="fa fa-cc-paypal"></i></a>
                                    <a href="#"><i class="fa fa-cc-discover"></i></a>
                                    <a href="#"><i class="fa fa-credit-card"></i></a>
                                    <a href="#"><i class="fa fa-cc-amex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center">
        © 2015 WOOW - Responsive Commerce Theme
    </div>
</footer>
</div>

<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userloginModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button">
                            <i class="fa fa-facebook"></i>Sign in with Facebook
                        </button>
                    </div>
                    <div class="user-login-or"><span>or</span></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox clearfix">
                        <label class="form-flat-checkbox pull-left">
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever">
                            <i></i>&nbsp;Remember Me
                        </label>
                        <span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userregisterModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Register account</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button">
                            <i class="fa fa-facebook"></i>Sign in with Facebook
                        </button>
                    </div>
                    <div class="user-login-or"><span>or</span></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Retype password</label>
                        <input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userlostpasswordModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username or E-mail:</label>
                        <input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="minicart-side">
    <div class="minicart-side-title">
        <h4>Shopping Cart</h4>
    </div>
    <div class="minicart-side-content">
        <div class="minicart">
            <div class="minicart-header no-items show">
                Your shopping bag is empty.
            </div>
            <div class="minicart-footer">
                <div class="minicart-actions clearfix">
                    <a class="button no-item-button" href="#">
                        <span class="text">Go to the shop</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/easing.min.js'></script>
<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
<script type='text/javascript' src='js/jquery.appear.min.js'></script>
<script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript' src='js/swatches-and-photos.js'></script>
<script type='text/javascript' src='js/jquery.cookie.min.js'></script>
<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/jquery.transit.min.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>

<script type='text/javascript' src='js/core.min.js'></script>
<script type='text/javascript' src='js/widget.min.js'></script>
<script type='text/javascript' src='js/mouse.min.js'></script>
<script type='text/javascript' src='js/slider.min.js'></script>
<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
<script type='text/javascript' src='js/price-slider.js'></script>
    </body>
</html>