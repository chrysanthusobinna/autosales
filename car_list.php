<?php
include("set.php"); 
include("functions.php"); 


	//	START UPDATE ACTIVE NAV UL HEADER
	$nav_active_home		=	"";
	$nav_active_car_list	=	"active";
	$nav_active_agent		=	"";
	$nav_active_services	=	"";
	$nav_active_about		=	"";
	$nav_active_contact		=	"";
	//	END UPDATE ACTIVE NAV UL HEADER
	
	if(isset($_GET["search"]))
	{

 
			$built_query = '';


			// Build query parts for each parameter
			buildQueryPart("car_location", "car_location");
			buildQueryPart("car_year", "car_year");
			buildQueryPart("car_condition", "car_condition");
			buildQueryPart("car_transmission", "car_transmission");
			buildQueryPart("car_make", "car_make");

			// Output the built query
			$db_query		=	"	WHERE	sold=0		AND		no_of_uploaded_photos > 0" . $built_query;
			 

	}
	else
	{
			$db_query		=	"	WHERE	sold=0		AND		no_of_uploaded_photos > 0"; 
			
	}
		
	 
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/car-list-fullWidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:22 GMT -->
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
            <h1>Car List</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Car List</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
			
			
			<?php /*
                <!-- Option bar start -->
                <div class="option-bar clearfix">
                    <div class="sorting-options2">
                        <span class="sort">Sort by:</span>
                        <select class="selectpicker search-fields" name="default-order">
                            <option>Default Order</option>
                            <option>Price High to Low</option>
                            <option>Price: Low to High</option>
                            <option>Newest Cars</option>
                            <option>Oldest Cars</option>
                        </select>
                    </div>
                    <div class="sorting-options float-right">
                        <a href="" class="change-view-btn active-view-btn float-right"><i class="fa fa-th-list"></i></a>
                        <a href="" class="change-view-btn float-right"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
				
				*/
				?>
				
				




		

      <?php
	  $self=$_SERVER["PHP_SELF"];
	  $rowsperpage=10;
	  $range=7;
	  if(isset($_GET["currentpage"]) && is_numeric($_GET["currentpage"]))
	  {
	  $currentpage=(int)$_GET["currentpage"];
	  } else {
	  $currentpage=1;
	  }
	  $offset=($currentpage-1)*$rowsperpage;
	  
	  $numrows=mysqli_num_rows(mysqli_query($con,"SELECT * FROM car_listing $db_query"));
	  
	  $totalpages=ceil($numrows/$rowsperpage);
	  if($currentpage>$totalpages)
	  {
	  $currentpage=$totalpages;
	  }
	  if($currentpage<1)
	  {
	  $currentpage=1;
	  }
	  
	  $query2=mysqli_query($con,"SELECT * FROM car_listing $db_query ORDER BY id DESC LIMIT $offset, $rowsperpage");
	  
	  $num=mysqli_num_rows($query2);
	  if($num==0)
	  {
	  echo"<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>";
	  }
	  else {
	  ?>

	<?php
	while($query_info=mysqli_fetch_array($query2))
		{
			$id								=			clean_output($query_info["id"]);
			$car_make						=			clean_output($query_info['car_make']);
			$car_model						=			clean_output($query_info['car_model']);
			$car_body_style					=			clean_output($query_info['car_body_style']);
			$car_year						=			clean_output($query_info['car_year']);
			$car_condition					=			clean_output($query_info['car_condition']);
			$car_mileage					=			clean_output($query_info['car_mileage']);
			$car_interior_color				=			clean_output($query_info['car_interior_color']);
			$car_body_color					=			clean_output($query_info['car_body_color']);
			$car_transmission				=			clean_output($query_info['car_transmission']);
			$car_engine						=			clean_output($query_info['car_engine']);
			$car_no_of_gears				=			clean_output($query_info['car_no_of_gears']);
			$car_location					=			clean_output($query_info['car_location']);
			$car_fuel_type					=			clean_output($query_info['car_fuel_type']);
			$car_description				=			clean_output($query_info['car_description']);
			$car_price						=			clean_output($query_info['car_price']);
 
 
				$query_car_photos 				= mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id' LIMIT 1");

					if (mysqli_num_rows($query_car_photos) > 0) {
						
						$row_car_photos = mysqli_fetch_assoc($query_car_photos);
						
						$img_src		=	$row_car_photos['img_src'];
						
					} else {
						//do nothing
						$img_src		=	"no_photo.png";
					}	
?>				
						
				
                <!-- Car box 2 start -->
                <div class="car-box-2" >
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-5">
                            <div class="car-thumbnail">
                                <a href="car_details.php?id=<?php echo $id; ?>" class="car-img">
                                    <div class="tag">Featured</div>
                                    <div class="price-box-2"><sup>&#163;</sup><?php echo number_format($car_price); ?>  </div>
                                    <img class="d-block w-100" src="car_pics/<?php echo $img_src; ?>" alt="car">
                                </a>
                                <div class="carbox-overlap-wrapper">
                                    <div class="overlap-box">
                                        <div class="overlap-btns-area">
                                            <a class="overlap-btn" href="car_details.php?id=<?php echo $id; ?>">
                                                <i class="fa fa-eye-slash"></i>
                                            </a>
                                            <a class="overlap-btn wishlist-btn">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 align-self-center">
                            <div class="detail">
                                <h3 class="title">
                                    <a href="car_details.php?id=<?php echo $id; ?>"><?php echo $car_make." ". $car_model; ?></a>
                                </h3>
                                <h5 class="location">
                                    <a href="car_details.php?id=<?php echo $id; ?>">
                                        <i class="flaticon-pin"></i><?php echo $car_make; ?>
                                    </a>
                                </h5>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> <?php echo number_format($car_mileage); ?> mi
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> <?php echo $car_transmission; ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> <?php echo $car_year; ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-fuel"></i> <?php echo $car_fuel_type; ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-car"></i> <?php echo $car_body_style; ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-gear"></i> <?php echo $car_body_color; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
 





<?php }	?> 



				<div class="pagination-box text-center">
                <!-- Page navigation start -->
 
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
<?php

if($currentpage>1)
	{
	echo"<li class='page-item'>  <a class='page-link' href='$self?id=$id&currentpage=1'><i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i></a> </li>";
	$prevpage	=	$currentpage-1;
	echo"<li class='page-item'>  <a class='page-link' href='$self?id=$id&currentpage=$prevpage'><i class='fa fa-angle-left'></i></a> </li>";
	}
for($x=($currentpage-$range); $x<(($currentpage+$range)+1); $x++)
{
if(($x>0) &&($x<=$totalpages))
{
	if($x==$currentpage)
	{
	echo " <li class='page-item'><a class='page-link active' href=''>$x</a></li>";
	}
	else
	{
	echo " <li class='page-item'><a class='page-link' href='$self?id=$id&currentpage=$x'>$x</a></li>";

	}
} }
if($currentpage!=$totalpages)
	{
	$nextpage=$currentpage+1;
	echo" <a href=''><b> > </b></a> ";
	echo" <a href=''><b>>></b></a> ";
	
	echo "<li class='page-item'> <a class='page-link' href='$self?id=$id&currentpage=$nextpage'><i class='fa fa-angle-right'></i></a> </li>";
	echo "<li class='page-item'> <a class='page-link' href='$self?id=$id&currentpage=$totalpages'><i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a> </li>";
	}


	?>
                        </ul>
                    </nav>
				</div>

 <?php } ?>
 

 




				
            </div>
        </div>
    </div>
</div>
<!-- Featured car start -->


<!-- Footer start -->
<?php include("footer.php"); ?>
<!-- Footer end -->


<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <div class="full-page-search-box">
        <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/index.html#" class="search-boxs">
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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/cmart-2-html/HTML/main/car-list-fullWidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 22:39:22 GMT -->
</html>