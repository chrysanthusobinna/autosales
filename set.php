<?php
//ERROR_REPORTING(0);
	ob_start();
	session_start();
	date_default_timezone_set("Africa/Lagos");


	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'car_sale';

	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}

			// Set API Key
			$ApiKey = "37a18d7d-8576-47f0-b81f-321a40daf038";
	
			$query_website_info=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM website_info WHERE id='1'")) or die(mysqli_error($con));
		 
			 
			$domain_name						=			$query_website_info['domain_name'];
			$company_name						=			$query_website_info['company_name'];
			$company_phonenumber				=			$query_website_info['company_phonenumber'];
			$company_emailaddress				=			$query_website_info['company_emailaddress'];
			$company_address					=			$query_website_info['company_address'];
			$admin_username						=			$query_website_info['admin_username'];
			$admin_password						=			$query_website_info['admin_password'];
		  

			$google_map_location		=	"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.4433584164203!2d121.3030574!3d30.734045499999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b2bfb214bc756b%3A0xc877e8a1cd1e583c!2sWei%20Hong%20Lu%2C%20Jin%20Shan%20Qu%2C%20Shang%20Hai%20Shi%2C%20China%2C%20201512!5e0!3m2!1sen!2sng!4v1655925219762!5m2!1sen!2sng";
		 

?>