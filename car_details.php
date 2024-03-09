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
	
	
	 
	if(!isset($_GET["id"])) { header("location: index.php?notif_err=Error"); }
	$id		= $_GET["id"];
	$query_account=mysqli_query($con,"SELECT * FROM car_listing WHERE id=$id");
	if(mysqli_num_rows($query_account)==0){ header("location: index.php?notif_err=Error"); }

	$query_info=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM car_listing WHERE id='$id'"));



 	$user_id						=			clean_output($query_info['user_id']);
 	$car_make						=			clean_output($query_info['car_make']);
	$car_model						=			clean_output($query_info['car_model']);
	$car_body_style					=			clean_output($query_info['car_body_style']);
	$car_year						=			clean_output($query_info['car_year']);
	$car_condition					=			clean_output($query_info['car_condition']);
	$car_mileage					=			clean_output(number_format($query_info['car_mileage']))." miles";
	$car_interior_color				=			clean_output($query_info['car_interior_color']);
	$car_body_color					=			clean_output($query_info['car_body_color']);
	$car_transmission				=			clean_output($query_info['car_transmission']);
	$car_engine						=			clean_output($query_info['car_engine']);
	$car_no_of_gears				=			clean_output($query_info['car_no_of_gears']);
	$car_location					=			clean_output($query_info['car_location']);
	$car_fuel_type					=			clean_output($query_info['car_fuel_type']);
	$car_description				=			clean_output($query_info['car_description']);
	$car_price						=			clean_output($query_info['car_price']);
 

	
	$more_details	=	"
	<li> <span>Make:</span>$car_make  </li> 
	<li> <span>Model:</span>$car_model </li>
	<li> <span>Body Style:</span>$car_body_style </li>
	<li> <span>Year:</span>$car_year </li>
	<li> <span>Condition:</span>$car_condition </li>
	<li> <span>Mileage:</span>$car_mileage </li>
	<li> <span>Interior Color:</span>$car_interior_color </li>
	<li> <span>Body Color:</span>$car_body_color </li>
	<li> <span>Transmission:</span>$car_transmission </li>
	<li> <span>Engine:</span>$car_engine </li>
	<li> <span>No. of Gears:</span>$car_no_of_gears </li>
	<li> <span>Fuel Type:</span>$car_fuel_type </li>
	<li> <span>Location:</span>$car_location </li>
";

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
            <h1>Car Details</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Car Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Car details page start -->
<div class="car-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="car-details-section">
                    <div class="heading-car-3 clearfix">
                        <div class="pull-left">
                            <h3><?php echo $car_make." ". $car_model. " ". $car_year; ?> </h3>
                            <p>
                                <i class="flaticon-pin"></i> <?php echo $car_location; ?>
                            </p>
                        </div>
                        <div class="pull-right">
                            <h3>&#163;<?php echo number_format($car_price); ?></h3>
                            <div class="clearfix"></div>
                            <div class="ratings-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 4.5/5 )</span>
                            </div>
							
							
							

							
							
                        </div>
                    </div>
                    <!-- Cardetailsslider 3 start -->
                    <div class="cardetailsslider-3 clearfix mb-30">
                        <div class="product-img-slide">
                            <div class="slider-for">

								<?php
									
								$query_car_photos	=	mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id' LIMIT 5");
								

								if (mysqli_num_rows($query_car_photos) > 0)
								{


									while($row_car_photos=mysqli_fetch_array($query_car_photos))
									{

									$img_src			=	$row_car_photos['img_src'];
									
									echo "<img src='car_pics/$img_src' class='img-fluid w-100' alt='slider-car'>";
									} 

								}
								else
								{ 
									echo "<img src='car_pics/no_photo.png' class='img-fluid w-100' alt='slider-car'>";
										
								}
								?>
												
 
                            </div>
                            <div class="slider-nav">
							
											<?php
												
											$query_car_photos	=	mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id' LIMIT 5");
											

											if (mysqli_num_rows($query_car_photos) > 0)
											{


												while($row_car_photos=mysqli_fetch_array($query_car_photos))
												{

												$img_src			=	$row_car_photos['img_src'];
												
												echo "<div class='thumb-slide'><img src='car_pics/$img_src' class='img-fluid' alt='small-car'></div>";
												} 

											}
											else
											{ 
												echo "<div class='thumb-slide'><img src='car_pics/no_photo.png' class='img-fluid' alt='small-car'></div>";
													
											}
											?>							

                            </div>
                        </div>
                    </div>

                    <div class="widget-2 advanced-search bg-grea-2 d-lg-none d-xl-none">
                        <h3 class="sidebar-title">Features</h3>
                        <ul> 
						<?php echo $more_details; ?>
                        </ul>
						
									  <iframe src="https://maps.google.it/maps?q=<?php echo $car_location; ?>&output=embed"   height="150" style="width:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
 					
                    <!-- Description start -->
                    <div class="Description mb-50">
                        <h3 class="heading-2">Overview</h3>
                        <p style="text-align: justify;" > <?php echo $car_description; ?></p>
                    </div>
					
		<hr/>

<?php 

	$query_seller_user	=	mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$user_id'"));
	
	$profile_picture						=			$query_seller_user['profile_picture'];
	$first_name								=			$query_seller_user['first_name'];
	$last_name								=			$query_seller_user['last_name'];
	$phone_number							=			$query_seller_user['phone_number'];
	$whatsapp_contact						=			$query_seller_user['whatsapp_contact'];
	$email_address							=			$query_seller_user['email_address'];

?>

          <div class=" ">
                <div class="row team-2 g-0">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="team-thumb">
                            <a href="#">
                                <img src="uploads/<?php echo $profile_picture; ?>" alt="team-1" class="img-fluid w-100">
                            </a>
                            <div class="team-social flex-middle">
                                <div class="team-overlay"></div>
                          
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 align-self-center">
                        <div class="team-info">
                            <h4><a href=""><?php echo $first_name." ".$last_name; ?> </a></h4>
                            <h5>Seller</h5>
							<hr/>

                            <p> <i class="fa fa-envelope-o"></i> &nbsp;<?php echo $email_address; ?><p>
							<hr/>
                            <p> <i class="fa fa-phone"></i> &nbsp;<?php echo $phone_number; ?><p>

							<hr/>
							
							<a href="mailto:<?php echo $email_address; ?>" style="width: 100%;border-radius:0px;margin-top:5px;" class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-o"></i> Mail</a> <br/>
							<a href="https://wa.me/<?php echo $whatsapp_contact; ?>" style="width: 100%;border-radius:0px;margin-top:5px;" class="btn btn-info btn-lg btn-block"><i class="fa fa-whatsapp"></i> Wahtsapp</a><br/>
							<a href="tel:<?php echo $phone_number; ?>" style="width: 100%;border-radius:0px;margin-top:5px;" class="btn btn-danger btn-lg btn-block"><i class="fa fa-phone"></i> Call</a><br/>
							
							 
		                 
					
					
					
					
                        </div>
                    </div>
                </div>
            </div>
			
			
			
 








					
					<hr/>
 
                
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search d-none d-xl-block d-lg-block">
                        <h3 class="sidebar-title">Features</h3>
                        <ul> 
						<?php echo $more_details; ?>
                        </ul>
						
									  <iframe src="https://maps.google.it/maps?q=<?php echo $car_location; ?>&output=embed"   height="150" style="width:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



                    </div>
 
			 
 
			</div>
            </div>
        </div>
        <!-- Related cars start -->
        <div class="related-cars comon-slick">
            <h3 class="heading-2">Related Cars</h3>
            <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>


 <?php



		$query_related_cars=mysqli_query($con,"SELECT * FROM car_listing WHERE sold=0 AND no_of_uploaded_photos > 0 order by rand() desc LIMIT 3");

			if(mysqli_num_rows($query_related_cars) > 0)
			{
			
				while($q_related_cars=mysqli_fetch_array($query_related_cars))
				{
				 
					$id_x							=			clean_output($q_related_cars['id']);
					$car_make_x						=			clean_output($q_related_cars['car_make']);
					$car_model_x					=			clean_output($q_related_cars['car_model']);
					$car_body_style_x				=			clean_output($q_related_cars['car_body_style']);
					$car_year_x						=			clean_output($q_related_cars['car_year']);
					$car_condition_x				=			clean_output($q_related_cars['car_condition']);
					$car_mileage_x					=			clean_output($q_related_cars['car_mileage']);
					$car_interior_color_x			=			clean_output($q_related_cars['car_interior_color']); 
					$car_body_color_x				=			clean_output($q_related_cars['car_body_color']); 
					$car_transmission_x				=			clean_output($q_related_cars['car_transmission']); 
					$car_engine_x					=			clean_output($q_related_cars['car_engine']);
					$car_no_of_gears_x				=			clean_output($q_related_cars['car_no_of_gears']);
					$car_location_x					=			clean_output($q_related_cars['car_location']);
					$car_fuel_type_x				=			clean_output($q_related_cars['car_fuel_type']);
					$car_description_x				=			clean_output($q_related_cars['car_description']);
					$car_price_x					=			clean_output($q_related_cars['car_price']);

				 
			 
			
					$query_car_photos_x 				= mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id_x' LIMIT 1");

						if (mysqli_num_rows($query_car_photos_x) > 0) {
							
							$row_car_photos_x = mysqli_fetch_assoc($query_car_photos_x);
							
							$img_src_x		=	$row_car_photos_x['img_src'];
							
						} else {
							$img_src_x		=	"no_photo.png";
						}
	?>			
			
                <div class="item slide-box">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="car_details.php?id=<?php echo $id_x; ?>" class="car-img">
                                <div class="tag-2 bg-active">For Sale</div>
                                <div class="price-box-2"><sup>&#163;</sup><?php echo number_format($car_price); ?> </div>
                                <img class="d-block w-100" src="car_pics/<?php echo $img_src_x; ?>" alt="car">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">
                                        <a class="overlap-btn" href="car_details.php?id=<?php echo $id_x; ?>">
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
                                <a href="car_details.php?id=<?php echo $id_x; ?>"><?php echo $car_make_x." ". $car_model_x; ?> </a>
                            </h1>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="flaticon-pin"></i><?php echo $car_location_x; ?>
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-way"></i> <?php echo number_format($car_mileage_x); ?> mi
                                </li>
                                <li>
                                    <i class="flaticon-manual-transmission"></i> <?php echo $car_transmission_x; ?>
                                </li>
                                <li>
                                    <i class="flaticon-calendar-1"></i> <?php echo $car_year_x; ?>
                                </li>
                                <li>
                                    <i class="flaticon-fuel"></i> <?php echo $car_fuel_type_x; ?>
                                </li>
                                <li>
                                    <i class="flaticon-car"></i> <?php echo $car_body_style_x; ?>
                                </li>
                                <li>
                                    <i class="flaticon-gear"></i> <?php echo $car_body_color_x; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



			<?php } } ?>



			</div>
        </div>
        <!-- Related cars end -->
    </div>
</div>
<!-- Car details page end -->


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

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +<?php echo $company_phonenumber; ?></li> " +
                    "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                    "<li><a href='index.php'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>

</body>

</html>
 