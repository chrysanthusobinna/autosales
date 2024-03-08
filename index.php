<?php
include("set.php"); 
include("functions.php"); 



	//	START UPDATE ACTIVE NAV UL HEADER
	$nav_active_home		=	"active";
	$nav_active_car_list	=	"";
	$nav_active_agent		=	"";
	$nav_active_services	=	"";
	$nav_active_about		=	"";
	$nav_active_contact		=	"";
	//	END UPDATE ACTIVE NAV UL HEADER
	
 
 ?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.6e.del">
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

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner banner-slider-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-3.jpg" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Welcome to Car <?php echo $company_name; ?></h1>
                    <p>Shop new & used cars, research & compare model</p>
                    <a href="car_list.php" class="btn-6">Get Started Now</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-5.jpg" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Find your Dream Car</h1>
                    <p>Shop new & used cars, research & compare model</p>
                    <a href="car_list.php" class="btn-6">Get Started Now</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-6.jpg" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Best place for sell car!</h1>
                    <p>Shop new & used cars, research & compare model</p>
                    <a href="car_list.php" class="btn-6">Get Started Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Banner end -->

<!-- Search box 3 start -->
<div class="search-box-3">
    <div class="container">
        <form method="GET" action="car_list.php">
            <div class="row">
     
 
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                 <div class="form-group">
                        <input style="width:100%" placeholder="   Location" type="text"  class="selectpicker search-fields" name="car_location">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select  required class="selectpicker search-fields" name="car_year">
                            <option value="">Select Year</option>
                            <option value="">Any Year</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="car_condition">
                            <option  value="">Select Condition</option>
							<option value="" >All Conditions </option>
							<option>Brand New </option>
							<option>Fairly Used</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="car_transmission">
                            <option	value="">Select Transmission</option>
 							<option	value="" >All Transmission </option>
                           <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <input style="width:100%" placeholder="   Car Brand" type="text"  class="selectpicker search-fields" name="car_make">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <button type="submit" name="search" class="btn w-100 button-theme btn-md">
                            <i class="fa fa-search"></i>Find
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search box 3 end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Featured Cars</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">
		
	


 <?php


		
		$query_featured_cars=mysqli_query($con,"SELECT * FROM car_listing WHERE sold=0 AND no_of_uploaded_photos > 0 order by rand() desc LIMIT 6") or die(mysqli_error($con));
		
		if(mysqli_num_rows($query_featured_cars) > 0)
		{
			
	

			while($q_featured_cars=mysqli_fetch_array($query_featured_cars))
			{
			 
				$id_F							=			clean_output($q_featured_cars['id']);
				$car_make_F						=			clean_output($q_featured_cars['car_make']);
				$car_model_F					=			clean_output($q_featured_cars['car_model']);
				$car_body_style_F				=			clean_output($q_featured_cars['car_body_style']);
				$car_year_F						=			clean_output($q_featured_cars['car_year']);
				$car_condition_F				=			clean_output($q_featured_cars['car_condition']);
				$car_mileage_F					=			clean_output($q_featured_cars['car_mileage']);
				$car_interior_color_F			=			clean_output($q_featured_cars['car_interior_color']);
				$car_body_color_F				=			clean_output($q_featured_cars['car_body_color']);
				$car_transmission_F				=			clean_output($q_featured_cars['car_transmission']);
				$car_engine_F					=			clean_output($q_featured_cars['car_engine']);
				$car_no_of_gears_F				=			clean_output($q_featured_cars['car_no_of_gears']);
				$car_location_F					=			clean_output($q_featured_cars['car_location']);
				$car_fuel_type_F				=			clean_output($q_featured_cars['car_fuel_type']);
				$car_description_F				=			clean_output($q_featured_cars['car_description']);
				$car_price_F					=			clean_output($q_featured_cars['car_price']);
				$no_of_uploaded_photos_F		=			clean_output($q_featured_cars['no_of_uploaded_photos']);

	

				$query_car_photos 				=			mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id_F'  LIMIT 1")or die(mysqli_error($con));

					if (mysqli_num_rows($query_car_photos) > 0) {
						
						$row_car_photos = mysqli_fetch_assoc($query_car_photos);
						
						$img_src		=	$row_car_photos['img_src'];
						
					} else {
						//nothing
						$img_src		=	"";
					}				
?>				
		
            <div class="col-lg-4 col-md-6" style="">
                <div class="car-box-3" style="height:425px;">
                    <div class="car-thumbnail">
                        <a href="car_details.php?id=<?php echo $id_F; ?>" class="car-img">
                            <div class="tag-2 bg-active">Featured</div>
                            <div class="price-box-2"><sup>&#163;</sup><?php echo number_format($car_price_F); ?></div>
                            <img class="d-block w-100" src="car_pics/<?php echo $img_src; ?>" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" href="car_details.php?id=<?php echo $id_F; ?>">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car_details.php?id=<?php echo $id_F; ?>"><?php echo $car_make_F." ". $car_model_F; ?></a>
                        </h1>
                        <div class="location">
                            <a href="car_details.php?id=<?php echo $id_F; ?>">
                                <i class="flaticon-pin"></i><?php echo $car_location_F; ?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> <?php echo number_format($car_mileage_F); ?> mi
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> <?php echo $car_transmission_F; ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> <?php echo $car_year_F; ?>
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i>  <?php echo $car_fuel_type_F; ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> <?php echo $car_body_style_F; ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> <?php echo $car_body_color_F; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

<?php 

	
					
					} 	} 
					
					
					else { echo ("<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>");}
					?>
		


       </div>
    </div>
</div>
<!-- Featured car end -->

<!-- Advantages 2 start -->
<div class="advantages-2 content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Advantages</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Highly  Secured</a>
                        </h5>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Trusted Agents</a>
                        </h5>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Get an Offer</a>
                        </h5>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Free Support</a>
                        </h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advantages 2 end -->

<!-- Latest offers Start -->
<div class="latest-offers categories content-area-13">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1 class="mb-10">Best Auto Website</h1>
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
                                    <img class="img-fluid w-100" src="img/car/car-4.jpg" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
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
                                    <img class="img-fluid w-100" src="img/car/car-6.jpg" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
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
                            <img class="img-fluid w-100" src="img/car/car-11.jpg" alt="photo">
                        </div>
                    </div>
                    <div class="new">New</div>
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
                                    <img class="img-fluid w-100" src="img/car/car-1.jpg" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
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
                                    <img class="img-fluid w-100" src="img/car/car-2.jpg" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
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
 


                                <div class="accordion accordion-flush" id="accordionFlushExample6">
                                    <div class="accordion-item">
                                        <div class="inside-car mb-50">
                                            
                                    <iframe  style="width:100%; height: 400px;" src="https://www.youtube.com/embed/P7fi4hP_y80" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
								
 </div>
</div>
<!-- Latest offers end -->


<!-- Our team start -->
<div class="our-team content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Sellers</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">

 
 
<?php
	$query_users=mysqli_query($con,"SELECT * FROM users order by rand()  LIMIT 4") or die(mysql_error());

	if(mysqli_num_rows($query_users) > 0){
		while($query_seller_user=mysqli_fetch_array($query_users))
		{
		 
				$first_name					=			clean_input(ucwords($query_seller_user['first_name']));
				$last_name					=			clean_input(ucwords($query_seller_user['last_name']));
				$profile_picture			=			clean_input(ucwords($query_seller_user['profile_picture']));
			 
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

<!-- Testimonial start -->
<div class="testimonial comon-slick content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Testimonial</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <!-- Slick slider area start -->
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
		
	  
		
		
 <?php



$query_x=mysqli_query($con,"SELECT * FROM testimonies  order by rand() desc LIMIT 2");

while($query_t=mysqli_fetch_array($query_x))
{
  $t_full_name								=			$query_t['t_full_name'];
  $t_text									=			$query_t['t_text'];

?>
 


            <div class="item slide-box">
                <div class="testimonials-inner">
                    <div class="user">
                        <a href="#">
                            <img class="media-object" src="img/avatar/testimony_1.png" alt="user">
                        </a>
                    </div>
                    <div class="testimonial-info">
                        <h3>
                           <?php echo $t_full_name; ?> 
                        </h3>
                        <p><?php echo $t_text; ?></p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>Rating</span>
                        </div>
                    </div>
                </div>
            </div>
    

<?php } ?>
		
		
		
		</div>
    </div>
</div>
<!-- Testimonial end -->

 
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

<!-- Car Modal 2 -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carOverviewModalLabel">
                        Find Your Dream Car
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
           </div>
        </div>
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
</html>
