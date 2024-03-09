<?php
include("set.php"); 
include("functions.php"); 


	//	START UPDATE ACTIVE NAV UL HEADER
	$nav_active_home		=	"";
	$nav_active_car_list	=	"";
	$nav_active_agent		=	"active";
	$nav_active_services	=	"";
	$nav_active_about		=	"";
	$nav_active_contact		=	"";
	//	END UPDATE ACTIVE NAV UL HEADER
	
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:27 GMT -->
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
				
				
            </div>        </div>
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
            <h1>Sells Agents</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Sells Agents</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <div class="row">
		
			  

 
<?php
	$query_users=mysqli_query($con,"SELECT * FROM users ORDER BY id DESC") or die(mysql_error());

	if(mysqli_num_rows($query_users) > 0){
		while($query_seller_user=mysqli_fetch_array($query_users))
		{
		 
				$first_name					=			clean_input(ucwords($query_seller_user['first_name']));
				$last_name					=			clean_input(ucwords($query_seller_user['last_name']));
				$profile_picture			=			clean_input($query_seller_user['profile_picture']);
			 
			$phone_number							=			$query_seller_user['phone_number'];
			$whatsapp_contact						=			$query_seller_user['whatsapp_contact'];
			$email_address							=			$query_seller_user['email_address'];

?>
					 

             		
		
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="team-3">
                    <div class="thumb">
                        <img src="uploads/<?php echo $profile_picture; ?>" alt="agent" class="img-fluid w-100">
                        <ul>
                            <li>
                                <a href="https://wa.me/<?php echo $whatsapp_contact; ?>" class="facebook-bg"><i class="fa fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo $email_address; ?>" class="twitter-bg"><i class="fa fa-envelope-o"></i></a>
                            </li>
                            <li>
                                <a href="tel:<?php echo $phone_number; ?>" class="google-bg"><i class="fa fa-phone"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info"> 
                        <h5><a href=""><?php echo $first_name." ".$last_name; ?></a></h5>
                        <p>Seller</p>
                    </div>
                </div>
            </div>


	<?php } }?>				  



<?php if((mysqli_num_rows($query_users))==0){ ?>

				<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>

<?php } ?>




       </div>
    </div>
</div>
<!-- Our team end -->


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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:27 GMT -->
</html>
