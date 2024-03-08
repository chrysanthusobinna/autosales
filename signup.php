<?php
include("set.php"); 
include("functions.php"); 

		// Generate CSRF token if not already generated
		if (!isset($_SESSION['csrf_token'])) {
			$_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a random token
		}

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
            <h1>Register to Sell Your Car</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Shop checkout start -->
<div class="shop-checkout content-area-5">


	<form action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">  

    <div class="container">
        <div class="from-checkout">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="heading-4">
                        <h4>Register as a Seller</h4>
                    </div>
					
					<?php

		 
			if(	(isset($_GET['RegisterationErrorMsg'])) &&
				(
				!empty($_SESSION["CSRF_token_Error"]) || 
				!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["whatsapp_contact_Error"]) || 
				!empty($_SESSION["email_address_Error"]) || 
				!empty($_SESSION["password_Error"]) || 
				!empty($_SESSION["profile_picture_Error"])
				) 
				){ ?>

					
					<br/>
					<div class="alert alert-warning" role="alert">
						<?php
						echo $_SESSION["CSRF_token_Error"] . $_SESSION["first_name_Error"] . $_SESSION["last_name_Error"] . $_SESSION["phone_number_Error"] . $_SESSION["whatsapp_contact_Error"] . $_SESSION["email_address_Error"] . $_SESSION["password_Error"] . $_SESSION["profile_picture_Error"];
				
				?>
					</div>
					<br/>
					<?php } ?>
 

					<center>
						<img id="profile_picture_img" src="img/user_profile.png" alt="your image" style="width:150px" />
					</center>
                        <div class="form-group">						
 						<label class="form-label" for="profile_picture">UPLOAD PROFILE PHOTO</label>					
							<input  name="profile_picture" id="profile_picture" required type="file"  accept="image/*" onchange="showSelectedImg(this);"  class="form-control"   >	
                        </div>			
 		
                 
						
                        <div class="form-group">
							<label class="form-label" for="first_name">First Name</label>					
							<input  name="first_name" id="first_name" required type="text" class="form-control" aria-label="First Name"
							value="<?php echo (isset($_SESSION['first_name']) ?  $_SESSION['first_name'] : ""); ?>">
                        </div>
						
                        <div class="form-group">
							<label class="form-label" for="last_name">Last Name</label>					
                            <input  name="last_name" id="last_name" required type="text" class="form-control" aria-label="Last Name"
							value="<?php echo (isset($_SESSION['last_name']) ?  $_SESSION['last_name'] : ""); ?>">
                       </div>
			 

                        <div class="form-group">
							<label class="form-label" for="phone_number">Phone Number</label>					
                            <input name="phone_number" id="phone_number" required  type="text" class="form-control" aria-label="Phone Number"
							value="<?php echo (isset($_SESSION['phone_number']) ?  $_SESSION['phone_number'] : ""); ?>">
                       </div>

                        <div class="form-group">
							<label class="form-label" for="whatsapp_contact">Whatsapp Contact</label>					
                            <input name="whatsapp_contact" id="whatsapp_contact" required  type="text" class="form-control" aria-label="Phone Number"
							value="<?php echo (isset($_SESSION['whatsapp_contact']) ?  $_SESSION['whatsapp_contact'] : ""); ?>">
                        </div>

                        <div class="form-group">
							<label class="form-label" for="email_address">Email Address</label>					
                            <input name="email_address"  id="email_address" required  type="email" class="form-control"  aria-label="Phone Number"
							value="<?php echo (isset($_SESSION['email_address']) ?  $_SESSION['email_address'] : ""); ?>">
                       </div>						
						
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
									<label class="form-label" for="password">Password</label>					
                                    <input name="password" id="password" required type="password" class="form-control"  aria-label="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
									<label class="form-label" for="password_2">Repeat Password</label>					
									<input name="password_2" id="password_2" required type="password" class="form-control"  aria-label="Repeat Password">
                               </div>
                            </div>
                        </div>
              
                    <br>
					<center>
					<button  name="submit" style="width:100%;" class="btn btn-md w-60 button-theme" type="submit">SUBMIT</button>
					</center>
                </div>
                <div class="col-lg-6 col-md-12">
                   

                <div class="about-slider-box simple-slider">
                    <img class="d-block w-100" src="img/car/car-12.jpg" alt="about">
                </div>
          
                  
                    <br>
                </div>
            </div>
			


		<hr/>	
			
         </div>
 
	</form>
 </div>
</div>
<!-- Shop checkout end -->


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

<script>

function showSelectedImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#profile_picture_img').attr('src', e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}


</script>

</body>

</html>




  <?php
  if(isset($_POST['submit']))
  {

		$_SESSION["CSRF_token_Error"]						 =	"";
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
			// CSRF token is invalid, handle the error (e.g., log, redirect, or show an error message)
		

			$_SESSION["CSRF_token_Error"]					.=	"&#183; CSRF token validation failed <br/>";
			$sessionKeys = array(
				"first_name_Error",
				"last_name_Error",
				"phone_number_Error",
				"whatsapp_contact_Error",
				"email_address_Error",
				"password_Error",
				"profile_picture_Error"
			);

			// Assign empty strings to session variables
			foreach ($sessionKeys as $key) {
				$_SESSION[$key] = "";
			}			
			header("location: ?RegisterationErrorMsg=true");
			die();
			

		}

		$profile_picture			= 			$_FILES["profile_picture"]["name"];
 
		$first_name					=			clean_input(ucwords($_POST['first_name']));
		$last_name					=			clean_input(ucwords($_POST['last_name']));
		$phone_number				=			clean_input($_POST['phone_number']);
		$whatsapp_contact			=			clean_input($_POST['whatsapp_contact']);
		$email_address				=			clean_input($_POST['email_address']);
		$password					=			$_POST['password']; 
		$password_2					=			$_POST['password_2']; 
  		
		 

  
		$_SESSION["first_name"]					=			clean_input(ucwords($_POST['first_name']));
		$_SESSION["last_name"]					=			clean_input(ucwords($_POST['last_name']));
		$_SESSION["phone_number"]				=			clean_input($_POST['phone_number']);
		$_SESSION["whatsapp_contact"]			=			clean_input($_POST['whatsapp_contact']);
		$_SESSION["email_address"]				=			clean_input($_POST['email_address']);

 
  

		//VALIDATE first_name
		$_SESSION["first_name_Error"]						 =	"";
		
        if(empty($first_name))
        {
 			$_SESSION["first_name_Error"]					.=	"&#183; First Name is required <br/>";		
        }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
			$_SESSION["first_name_Error"]					.=	"&#183; Only letters and white space allowed for First Name <br/>";
		}		

		//VALIDATE last_name
		$_SESSION["last_name_Error"]						 =	""; 
		 
        if(empty($last_name))
        {
 			$_SESSION["last_name_Error"]					.=	 "&#183; Last Name is required <br/>";		
        }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
			$_SESSION["last_name_Error"]					.=	"&#183; Only letters and white space allowed for Last Name <br/>";
		}

		//VALIDATE phone_number
		$_SESSION["phone_number_Error"]						 =	"";

        if(empty($phone_number))
        {
 			$_SESSION["phone_number_Error"]					.=	"&#183; Phone Number is required <br/>";		
        }		
		
		if (!preg_match('/^\+?[0-9]{7,15}$/', $phone_number)) {
			$_SESSION["phone_number_Error"]					.=	"&#183; You have entered an Invalid Phone Number <br/>";
		}	

		//VALIDATE whatsapp_contact
		$_SESSION["whatsapp_contact_Error"]					 = 	"";  

        if(empty($whatsapp_contact))
        {
 			$_SESSION["whatsapp_contact_Error"]				.=	"&#183; Phone Number is required <br/>";		
        }		
		
		if (!preg_match('/^\+?[0-9]{7,15}$/', $whatsapp_contact)) {
		$_SESSION["whatsapp_contact_Error"]					.=	"&#183; You have entered an Invalid Whatsapp Contact <br/>";
		}

		
		//VALIDATE email_address
		$_SESSION["email_address_Error"]					 =	""; 
		
		$check_email										 =	mysqli_query($con,"SELECT * FROM users WHERE email_address='$email_address'");
		
		if(mysqli_num_rows($check_email)>0){
			$_SESSION["email_address_Error"]				.=	"&#183; Email Address Alrady Exist <br/>";
		}

        if(empty($email_address))
        {
 			$_SESSION["email_address_Error"]				.=	"&#183; Email Address is required <br/>";		
        }
				
		if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
			$_SESSION["email_address_Error"]				.=	"&#183; Invalid email format <br/>";
  		}
		

		//VALIDATE password
		$_SESSION["password_Error"]					 		 =	""; 
		
        if(empty($password))
        {
 			$_SESSION["password_Error"]						.=	"&#183; Password is required <br/>";		
        }
		
		if($password != $password_2)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password Confirmation does not match <br/>";		
		}
		
		if(strlen($password) < 8)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password must be more than 8 characters in length <br/>";		
		}
		
		
	 
		//VALIDATE profile_picture
		$_SESSION["profile_picture_Error"]					=	"";

		$profile_picture_img_ext							=			pathinfo($profile_picture, PATHINFO_EXTENSION);
		$profile_picture_new								=			time().rand(1000,9000).".".$profile_picture_img_ext;
 
 		

        if (!isset($_FILES['profile_picture'])) 
        {
 			$_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture is required <br/>";		
        }

		$folder												=	"uploads/";
		$img_allowed_types									=	array('jpg','gif','png','bmp','jpeg','JPG','GIF','PNG','BMP','JPEG');
							
		if(!in_array($profile_picture_img_ext, $img_allowed_types))
		{
			$_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture must be an Image file type <br/>";		
		}
			
		

		 
		  if(	!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["whatsapp_contact_Error"]) || 
				!empty($_SESSION["email_address_Error"]) || 
				!empty($_SESSION["password_Error"]) || 
				!empty($_SESSION["profile_picture_Error"])
				)
				{
					header("location: ?RegisterationErrorMsg=true");
				}
				else
				{
			  	move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $folder.$profile_picture);
				rename($folder.$profile_picture,$folder.$profile_picture_new);
				
				
				$password 									= 	password_hash($password, PASSWORD_DEFAULT);




				mysqli_query($con,"INSERT INTO users	 SET 			profile_picture			=		'$profile_picture_new',
																		first_name				=		'$first_name', 
																		last_name				=		'$last_name', 
																		phone_number			=		'$phone_number', 																		
																		whatsapp_contact		=		'$whatsapp_contact', 
																		email_address			=		'$email_address', 
																		password				=		'$password'") or die(mysqli_error($con));
				
				session_destroy();				
				$success_message	=	"Registration Completed, You can now login!";														
				header("location: process_user_login.php?LoginAlert=$success_message");
																		
																		
				}
		 
	 
		 
  }
  
  
  
  
  
  
  ?>