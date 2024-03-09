<?php
include("set.php"); 
include("functions.php"); 

	//	START UPDATE ACTIVE NAV UL HEADER
	$nav_active_home		=	"";
	$nav_active_car_list	=	"";
	$nav_active_agent		=	"";
	$nav_active_services	=	"active";
	$nav_active_about		=	"";
	$nav_active_contact		=	"";
	//	END UPDATE ACTIVE NAV UL HEADER


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:27 GMT -->
<head>
    <title><?php echo $company_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.6e.css">
    <link type="text/css" rel="stylesheet" href="fonts/bootstrap-icons/bootstrap-icons.6f.delay">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css"  href="css/jnoty.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/initial.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/midnight-blue.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=OSans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- <div class="page_loader"></div> -->

<!-- Top header start -->
<header class="top-header" id="top-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-7">
         <div class="list-inline">
         <a href="mailto:<?php echo $company_emailaddress;  ?>" class="d-none-768"><i class="fa fa-envelope"></i><?php echo $company_emailaddress;  ?></a>
         </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-5">
			
			<?php 	if(isset($_SESSION["user"])) { ?>
                <ul class="top-social-media pull-right">			 
                    <li> <a href="user/" class="sign-in"><i class="fa fa-user"></i> GOTO DASHBOARD</a> </li>
                    <li> <a href="?logout=true" class="sign-in"><i class="fa fa-sign-in"></i> LOGOUT</a> </li>
                </ul>
			<?php } else { ?>

                <ul class="top-social-media pull-right">
                    <li> <a href="process_user_login.php" class="sign-in"><i class="fa fa-sign-in"></i> Login</a> </li>
                    <li> <a href="signup.php" class="sign-in"><i class="fa fa-user"></i> Register</a> </li>
                </ul>
			<?php } ?>
				
				
            </div>
			</div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header sticky-header header-with-top" id="main-header-4">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="header-left">
            <a class="navbar-brand logos" href="index.php">
                <img style="height:60px;" src="img/logos/black-logo.png" alt="logo">
            </a>
        </div>
        <button class="navbar-toggler" id="drawer" type="button">
            <span class="fa fa-bars"></span>
        </button>
        <div class="header-centar">
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="navbar-nav">
      
				<?php include("nav_ul_header_pc.php"); ?>
                
                 
                </ul>
            </div>
        </div>
        <div class="header-right">
            <div class="contact-now">
                <div class="left">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="right">
                    <h5>Call Us</h5>
                    <h4><a href="tel:<?php echo $company_phonenumber; ?>"><?php echo $company_phonenumber; ?></a></h4>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Main header end -->


<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="img/logos/black-logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <ul class="menu-list">
			
			<?php include("nav_ul_header_mobile.php"); ?>
           
            </ul>
        </div>
        <div class="get-in-touch"  >
            <h3 class="heading">Get in Touch</h3>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-phone"></i>
                <div class="detail">
                    <a  style="font-size:13px;" href="tel:<?php echo $company_phonenumber; ?>"><?php echo $company_phonenumber; ?></a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-mail"></i>
                <div class="detail">
                    <a  style="font-size:13px;" href="#"><?php echo $company_emailaddress;  ?></a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex mb-0">
                <i class="flaticon-earth"></i>
                <div class="detail">
                    <a  style="font-size:13px;" href="#"><?php echo $company_emailaddress;  ?></a>
                </div>
            </div>
        </div>
    
    </div>
</nav>
<!-- Sidenav end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Services</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->



<!-- Latest offers Start -->
<div class="latest-offers categories content-area-13">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1 class="mb-10">SERVICES</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row row-2">
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-service1.png" alt="photo">
                                </div>
                            </div>
                            <div class="new"> </div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3> </h3>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-service2.png" alt="photo">
                                </div>
                            </div>
                            <div class="new"> </div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3> </h3>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-pad">
                <div class="latest-offers-box">
                    <div class="photo-overflow">
                        <div class="car-thumbnail-photo">
                            <img class="img-fluid w-100" src="img/car/car-service3.png" alt="photo">
                        </div>
                    </div>
                    <div class="new"> </div>
                    <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3> </h3>
                                    <h5></h5>
                                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-service4.png" alt="photo">
                                </div>
                            </div>
                            <div class="new"> </div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3> </h3>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-service5.png" alt="photo">
                                </div>
                            </div>
                            <div class="new"> </div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3> </h3>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest offers end -->



<!-- Services start -->
<div class="services content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1 class="mb-10"> </h1>
            <div class="title-border mb-30">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">
 
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-wheel"></i>
                        </div>
                        <div class="detail">
						<p>&nbsp;</p>
						<h4><a href="services.php">Oil Change</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-air-conditioner"></i>
                        </div>
                        <div class="detail">
 						<p>&nbsp;</p>
                        <h4><a href="services.php">AIR conditioning</a></h4>
                        </div>
                    </div>
                </div>
            </div>
   
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-motor"></i>
                        </div>
                        <div class="detail">
						<p>&nbsp;</p>
						<h4><a href="services.php">Repairing</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-deal"></i>
                        </div>
                        <div class="detail">
						<p>&nbsp;</p>
						<h4><a href="services.php">Trusted Specialist</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-lock"></i>
                        </div>
                        <div class="detail">
						<p>&nbsp;</p>
						<h4><a href="services.php">Security</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="advantages-4">
                    <div class="advantages-4-inner">
                        <div class="icon flaticon-console">
                            <i class="flaticon-support-2"></i>
                        </div>
                        <div class="detail">
 						<p>&nbsp;</p>
						<h4><a href="services.php">Free Support</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Counters strat -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-car"></i>
                    <h1 class="counter">967</h1>
                    <h5>Today Cars Service</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-blog"></i>
                    <h1 class="counter">1276</h1>
                    <h5>Reviews</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">1396</h1>
                    <h5>Happy Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-medal"></i>
                    <h1 class="counter">20</h1>
                    <h5>Awards</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->
 





 


 
<!-- Intro section start -->
<div class="intro-section">
    <div class="intro-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="intro-text">
                        <h3>Do You Have Questions ?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <a href="contact.php" class="btn btn-md">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->


<!-- Footer start -->
<?php include("footer.php"); ?>
<!-- Footer end -->



<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <div class="full-page-search-box">
        <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/index.php#" class="search-boxs">
            <input class="search" type="search" value="" placeholder="type keyword(s) here"/>
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.9f.delay"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/jquery.mousewheel.min.js"></script>
<script  src="js/lightgallery-all.js"></script>
<script  src="js/jnoty.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/sidebar.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>

</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:27 GMT -->
</html>