<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>
                        Contact Info
                    </h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i><?php echo $company_address; ?>
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:<?php echo $company_emailaddress;  ?>"><?php echo $company_emailaddress;  ?></a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:<?php echo $company_phonenumber; ?>"><?php echo $company_phonenumber; ?></a>
                        </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                    <div class="social-list-2">
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
					<?php include("nav_ul_footer_mobile_and_pc.php"); ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Latest</h4>
					


 <?php



$query_latest_cars=mysqli_query($con,"SELECT * FROM car_listing WHERE sold=0 AND no_of_uploaded_photos > 0 order by rand() desc LIMIT 3") or die(mysqli_error($con));
		if(mysqli_num_rows($query_latest_cars) > 0)
		{
		
			while($q_latest_cars=mysqli_fetch_array($query_latest_cars))
			{
			 
				$id_L							=			clean_output($q_latest_cars['id']);
				$car_make_L						=			clean_output($q_latest_cars['car_make']);
				$car_model_L					=			clean_output($q_latest_cars['car_model']);
				$car_body_style_L				=			clean_output($q_latest_cars['car_body_style']);
				$car_year_L						=			clean_output($q_latest_cars['car_year']);
				$car_condition_L				=			clean_output($q_latest_cars['car_condition']);
				$car_mileage_L					=			clean_output($q_latest_cars['car_mileage']);
				$car_interior_color_L			=			clean_output($q_latest_cars['car_interior_color']);
				$car_body_color_L				=			clean_output($q_latest_cars['car_body_color']);
				$car_transmission_L				=			clean_output($q_latest_cars['car_transmission']);
				$car_engine_L					=			clean_output($q_latest_cars['car_engine']);
				$car_no_of_gears_L				=			clean_output($q_latest_cars['car_no_of_gears']);
				$car_location_L					=			clean_output($q_latest_cars['car_location']);
				$car_fuel_type_L				=			clean_output($q_latest_cars['car_fuel_type']);
				$car_description_L				=			clean_output($q_latest_cars['car_description']);
				$car_price_L					=			clean_output($q_latest_cars['car_price']);

		
				$query_car_photos_L 				= mysqli_query($con, "SELECT * FROM car_photos WHERE car_id = '$id_L' LIMIT 1");

					if (mysqli_num_rows($query_car_photos_L) > 0) {
						
						$row_car_photos_L = mysqli_fetch_assoc($query_car_photos_L);
						
						$img_src_L		=	$row_car_photos_L['img_src'];
						
					} else {
						$img_src_L		=	"no_photo.png";
					}

					
?>		
					
                    <div class="d-flex mb-4 recent-posts-box">
                        <a href="car_details.php?id=<?php echo $id_L; ?>">
                            <img class="flex-shrink-0 me-3" src="car_pics/<?php echo $img_src_L; ?>" alt="small-car">
                        </a>
                        <div class="detail align-self-center">
                            <h5>
                                <a href="car_details.php?id=<?php echo $id_L; ?>"><?php echo $car_make_L." ". $car_model_L. " ". $car_year_L; ?></a>
                            </h5>
                            <div class="listing-post-meta">
                                &#163;<?php echo number_format($car_price_L); ?>  
                            </div>
                        </div>
                    </div>


		<?php } }?>


                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Subscribe to our newsletter, so you can be the first to find out updates on latest and cheap cars , as well as general car updates throughout the year.</p>
                        <form class="form-inline d-flex" action="#">
                            <input class="form-control" type="email" id="email" placeholder="Email Address...">
                            <button class="btn button-theme" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p> <?php echo $company_name; ?> Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved<p/>
					<p>Designed by <a href="www.linkedin.com/in/chrysanthus-obinna">Chrysanthus.C.</a>  </p>					
                </div>
            </div>
        </div>
    </div>
</footer>

<?php

if(isset($_GET["logout"]))
{
	session_destroy();
																			
		echo"<script>
		alert('You have been logged out!');
		window.location='index.php';
		</script>";
}


?>