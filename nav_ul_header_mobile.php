


                <li><a class="<?php echo $nav_active_home; ?>" href="index.php" >Home</a> </li>
    
                <li><a class="<?php echo $nav_active_car_list; ?>" href="car_list.php">Car Listing</a> </li>

                <li><a class="<?php echo $nav_active_agent; ?>" href="agent.php">Sellers</a> </li>

                <li><a class="<?php echo $nav_active_services; ?>" href="services.php">Service</a> </li>

                <li><a class="<?php echo $nav_active_about; ?>" href="about.php">About</a>  </li>
					
                <li><a class="<?php echo $nav_active_contact; ?>" href="contact.php">Contact</a> </li>

 
			<?php 	if(isset($_SESSION["user"])) { ?>
                    <li> <a href="user/" class="sign-in"><i class="fa fa-user"></i> GOTO DASHBOARD</a> </li>
                    <li> <a href="?logout=true" class="sign-in"><i class="fa fa-sign-in"></i> LOGOUT</a> </li>
			<?php } else { ?>

                    <li> <a href="process_user_login.php" class="sign-in"><i class="fa fa-sign-in"></i> Login</a> </li>
                    <li> <a href="signup.php" class="sign-in"><i class="fa fa-user"></i> Register</a> </li>
			<?php } ?>
								
				 