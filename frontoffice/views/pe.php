<?php include_once "../Connexion.php" ; ?>
<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Animalia</title>

    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel='stylesheet' href='css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
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
$sql="SELECT * From evenements";
$db = Connect::getConnection();
try
{
    $liste = $db->query($sql);

}
catch (Exception $e)
{
    die('Erreur: '.$e->getMessage());
}
?>
<div class="offcanvas open">
    <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
            <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                <i class="fa fa-heart-o"></i> My Wishlist
            </a>
            <a class="offcanvas-user-account-link" href="my-account.html">
                <i class="fa fa-user"></i> Login
            </a>
        </div>
        <nav class="offcanvas-navbar">
            <ul class="offcanvas-nav">
                <li class="menu-item-has-children dropdown current-menu-ancestor">
                    <a href="./" class="dropdown-hover">Home <span class="caret"></span></a>

                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item-has-children dropdown-submenu">
                            <a href="#">Women <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                <li><a href="shop-by-category.html">Nulla</a></li>
                                <li><a href="shop-by-category.html">Donec</a></li>
                                <li><a href="shop-by-category.html">Aliquam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown-submenu">
                            <a href="#">Brands <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-by-category.html">Evans</a></li>
                                <li><a href="shop-by-category.html">Adesso</a></li>
                                <li><a href="shop-by-category.html">Crocs</a></li>
                                <li><a href="shop-by-category.html">Carvela</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown-submenu">
                            <a href="#">Features <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-fullwidth.html">Products Style 2</a></li>
                                <li><a href="shop-detail-2.html">Single Product Style 2</a></li>
                                <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="cart-empty.html">Empty Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Mega Menu" href="#">Mega Menu</a>
                        </li>
                    </ul>
                </li>
                <li><a href="collection.html">Collections</a></li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-default.html">Blog Default</a></li>
                        <li><a href="blog-center.html">Blog Center</a></li>
                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div id="wrapper" class="wide-wrap">
    <div class="offcanvas-overlay"></div>
    <header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
        <div class="topbar">
            <div class="container topbar-wap">
                <div class="row">
                    <div class="col-sm-6 col-left-topbar">
                        <div class="left-topbar">
                            Shop unique and handmade items directly
                            <a href="#">About<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-right-topbar">
                        <div class="right-topbar">
                            <div class="user-login">
                                <ul class="nav top-nav">
                                    <li><a data-rel="loginModal" href="#"> Login </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-container">
            <div class="navbar navbar-default navbar-scroll-fixed">
                <div class="navbar-default-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-default-col">
                                <div class="navbar-wrap">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar bar-top"></span>
                                            <span class="icon-bar bar-middle"></span>
                                            <span class="icon-bar bar-bottom"></span>
                                        </button>
                                        <a class="navbar-search-button search-icon-mobile" href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a class="cart-icon-mobile" href="#">
                                            <i class="elegant_icon_bag"></i><span>0</span>
                                        </a>
                                        <a class="navbar-brand" href="./">
                                            <img class="logo" alt="WOOW" src="images/logo.png">
                                            <img class="logo-fixed" alt="WOOW" src="images/logo-fixed.png">
                                            <img class="logo-mobile" alt="WOOW" src="images/logo-mobile.png">
                                        </a>
                                    </div>
                                    <nav class="collapse navbar-collapse primary-navbar-collapse">
                                        <ul class="nav navbar-nav primary-nav">
                                            <li class="current-menu-item menu-item-has-children dropdown">
                                                <a href="./index.html" class="dropdown-hover">
                                                    <span class="underline">Home</span> <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                <a href="shop.html" class="dropdown-hover">
                                                    <span class="underline">Chat</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="mega-col-3">
                                                        <h3 class="megamenu-title">Women <span class="caret"></span></h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-by-category.html">Maecenas</a></li>
                                                            <li><a href="shop-by-category.html">Nulla</a></li>
                                                            <li><a href="shop-by-category.html">Donec</a></li>
                                                            <li><a href="shop-by-category.html">Aliquam</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-col-3">
                                                        <h3 class="megamenu-title">Brands <span class="caret"></span></h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-by-category.html">Evans</a></li>
                                                            <li><a href="shop-by-category.html">Adesso</a></li>
                                                            <li><a href="shop-by-category.html">Crocs</a></li>
                                                            <li><a href="shop-by-category.html">Carvela</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-col-3">
                                                        <h3 class="megamenu-title">Features <span class="caret"></span></h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-fullwidth.html">Products Style 2</a></li>
                                                            <li><a href="shop-detail-2.html">Single Product Style 2</a></li>
                                                            <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="cart-empty.html">Empty Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-col-3">
                                                        <h3 class="megamenu-title">Mega Menu</h3>
                                                        <div class="megamenu-sidebar">
                                                            <div class="widget widget_products commerce">
                                                                <ul class="product_list_widget">
                                                                    <li>
                                                                        <a href="shop-detail-1.html">
                                                                            <img src="images/products/thumb/product_60x60.jpg" alt="2a"/>
                                                                            <span class="product-title">Cras rhoncus duis viverra</span>
                                                                        </a>
                                                                        <span class="amount">&pound;12.00</span>
                                                                        &ndash;
                                                                        <span class="amount">&pound;20.00</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-detail-1.html">
                                                                            <img src="images/products/thumb/product_60x60.jpg" alt="3a"/>
                                                                            <span class="product-title">Morbi sed egestas</span>
                                                                        </a>
                                                                        <span class="amount">&pound;123.00</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-detail-1.html">
                                                                            <img src="images/products/thumb/product_60x60.jpg" alt="4a"/>
                                                                            <span class="product-title">Creamy Spring Pasta</span>
                                                                        </a>
                                                                        <span class="amount">&pound;321.00</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.html"><span class="underline">Chien</span></a></li>
                                            <li class="menu-item-has-children dropdown">
                                                <a href="#" class="dropdown-hover">
                                                    <span class="underline">Forum</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-default.html">Blog Default</a></li>
                                                    <li><a href="blog-center.html">Blog Center</a></li>
                                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children dropdown">
                                                <a href="#" class="dropdown-hover">
                                                    <span class="underline">Contact</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-us.html">About us</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="header-right">
                                        <div class="navbar-search">
                                            <a class="navbar-search-button" href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <div class="search-form-wrap show-popup hide"></div>
                                        </div>
                                        <div class="navbar-minicart navbar-minicart-topbar">
                                            <div class="navbar-minicart">
                                                <a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart"></i>
																<span>0</span>
															</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navbar-wishlist">
                                            <a class="wishlist" href="wishlist.html">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search-overlay hide">
                    <div class="container">
                        <div class="header-search-overlay-wrap">
                            <form class="searchform">
                                <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
                            </form>
                            <button type="button" class="close">
                                <span aria-hidden="true" class="fa fa-times"></span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content-container no-padding"style="z-index: 1;">
        <div class="container-full">
            <div class="main-content">
                <div class="row row-fluid">
                    <div class="col-sm-12">
                        <div class="rev_slider_wrapper">
                            <div id="rev_slider" class="rev_slider ">
                                <ul>
                                    <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">

                                        <!--<img src="images/slideshow/dummy.png" alt="" width="1920" height="656" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
                                        -->
                                        <div class="tp-caption home1-small-black tp-resizeme" data-x="386" data-y="217" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
                                            Tout est disponible
                                        </div>

                                        <div class="tp-caption primary-button rev-btn" data-x="528" data-y="342" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
                                            shop
                                        </div>

                                        <div class="tp-caption home1-primary tp-resizeme" data-x="427" data-y="261" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
                                            chez Animalia !
                                        </div>

                                        <div class="tp-caption tp-resizeme" data-x="-20" data-y="110" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                                            <img src="images/slideshow/soldes2.png" alt="" width="550" height="500" data-ww="650px" data-hh="500px" data-lazyload="images/slideshow/soldes2.png">
                                        </div>

                                        <!--<div class="tp-caption tp-resizeme" data-x="172" data-y="311" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                                            <img src="images/slideshow/dummy.png" alt="" width="260" height="303" data-ww="260px" data-hh="303px" data-lazyload="images/slideshow/ipad.png">
                                        </div>-->

                                        <!--<div class="tp-caption tp-resizeme" data-x="281" data-y="390" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                                            <img src="images/slideshow/dummy.png" alt="" width="221" height="228" data-ww="221px" data-hh="228px" data-lazyload="images/slideshow/iphone.png">
                                        </div>-->

                                        <div class="tp-caption tp-resizeme" data-x="700" data-y="160" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                                            <img src="images/slideshow/dog.png" alt="" width="625" height="500" data-ww="625px" data-hh="500px" data-lazyload="images/slideshow/dog.png">
                                        </div>
                                    </li>

                                    <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">

                                        <!--<img src="images/slideshow/dummy.png" alt="" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
                                        -->

                                        <div class="tp-caption tp-resizeme" data-x="-80" data-y="46" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="x:-50px;opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                                            <img src="images/slideshow/dummy.png" alt="" width="304" height="523" data-ww="504px" data-hh="523px" data-lazyload="images/products/brit.png">
                                        </div>

                                        <div class="tp-caption home1-small-black tp-resizeme" data-x="610" data-y="183" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            the best products 2015
                                        </div>

                                        <div class="tp-caption primary-button rev-btn" data-x="610" data-y="402" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
                                            shop now
                                        </div>

                                        <div class="tp-caption home1-primary tp-resizeme" data-x="610" data-y="227" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            Built-in speakerphone
                                        </div>

                                        <div class="tp-caption home3-small-black tp-resizeme" data-x="610" data-y="296" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                            Suscipit aliquam lorem ornare consectetur integer urna<br> fermentum venenatis, molestie a non phasellus feugiat curae nam<br> orci convallis
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--

                    shopping container
                -->

                <div class="container" style="z-index:0;">
                    <div class="row shipping-policy">
                        <div class="policy-featured-col col-md-4 col-sm-6">
                            <i class="fa fa-money"></i>
                            <h4 class="policy-featured-title">
                                100% <br> remboursé
                            </h4>
                            Remboursé gratuitement avant 30 jours
                        </div>
                        <div class="policy-featured-col col-md-4 col-sm-6">
                            <i class="fa fa-globe"></i>
                            <h4 class="policy-funiseatured-title">
                                Livraison <br> Tunis
                            </h4>
                            Livraison gratuit (Tunis)
                        </div>
                        <div class="policy-featured-col col-md-4 col-sm-6">
                            <i class="fa fa-clock-o"></i>
                            <h4 class="policy-featured-title">
                                livraison <br>  sous 48 heures
                            </h4>
                            Pour les paquets standards
                        </div>
                    </div>
                </div>

                <!--end-->

                <div class="container">
                    <div class="row row-fluid mb-10">
                        <div class="col-sm-12">
                            <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="product-slider-title">
                                    <h3 class="el-heading">Events and promotions</h3>
                                </div>
                                <!--afficghage de la listes des evenements que je dois remplaces par une image-->

                                <div class="caroufredsel-wrap">
                                    <div class="commerce columns-4">
                                        <ul class="products columns-4" data-columns="4">
                                            <li class="product product-no-border style-2">

                                    <?PHP
                                    foreach($liste as $row){
                                        ?>
                                        <tr>
                                            <td><?PHP  echo '<img src="img/' . $row["image"] . '">';?> </td>


                                            <td> <form method="POST" >
                                                    <p><input type="button" id="btn1" value="participer" onclick="disableButton(this)"</p>
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>

                                        </tr>
                                        <?PHP
                                    }
                                    ?>
                                            </li>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
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
<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>

<script type='text/javascript' src='js/extensions/revolution.extension.video.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.slideanims.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.actions.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.layeranimation.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.kenburn.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.navigation.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.migration.min.js'></script>
<script type='text/javascript' src='js/extensions/revolution.extension.parallax.min.js'></script>
<script type="text/javascript">

    var tpj=jQuery;

    var revapi7;
    tpj(document).ready(function() {
        if(tpj("#rev_slider").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider");
        }else{
            revapi7 = tpj("#rev_slider").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"on",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"hephaistos",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:''
                    }
                },
                gridwidth:1170,
                gridheight:600,
                lazyType:"smart",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/
</script>
</body>
</html>