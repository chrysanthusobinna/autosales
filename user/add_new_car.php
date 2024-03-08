<?php
include("../set.php");
include("user_inc.php");
include('../functions.php');
 
 

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $company_name; ?> | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../_source/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../_source/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../_source/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../_source/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../_source/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../_source/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../_source/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../_source/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="exit.php" class="nav-link">Logout</a>
      </li>
    </ul>


   </nav>
  <!-- /.navbar -->

<?php include("side_bar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sell a Car</h1>
          </div><!-- /.col -->


        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Sell a Car</li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


			<?php 
  
			if(	(isset($_GET['CarDetailsErrorMsg'])) &&
				(
				!empty($_SESSION["car_make_Error"]) || 
				!empty($_SESSION["car_model_Error"]) || 
				!empty($_SESSION["car_body_style_Error"]) || 
				!empty($_SESSION["car_year_Error"])	||
				!empty($_SESSION["car_condition_Error"])	||
				!empty($_SESSION["car_mileage_Error"])	||
				!empty($_SESSION["car_interior_color_Error"])	||
				!empty($_SESSION["car_body_color_Error"])	||
				!empty($_SESSION["car_transmission_Error"])	||
				!empty($_SESSION["car_engine_Error"])	||
				!empty($_SESSION["car_no_of_gears_Error"])	||
				!empty($_SESSION["car_location_Error"])	||
				!empty($_SESSION["car_fuel_type_Error"])	||
				!empty($_SESSION["car_description_Error"])	||
				!empty($_SESSION["car_price_Error"]) 
				) 
				){ ?>

					
					<br/>
					<div class="alert alert-warning" role="alert">
						<?php
						echo	$_SESSION["car_make_Error"]			.	$_SESSION["car_model_Error"]		.	$_SESSION["car_body_style_Error"]		.	$_SESSION["car_year_Error"]			.	
								$_SESSION["car_condition_Error"]	.	$_SESSION["car_mileage_Error"]		.	$_SESSION["car_interior_color_Error"] 	.	$_SESSION["car_body_color_Error"]	.	
								$_SESSION["car_transmission_Error"] .	$_SESSION["car_engine_Error"] 		.	$_SESSION["car_no_of_gears_Error"]		.	$_SESSION["car_location_Error"]		.	
								$_SESSION["car_fuel_type_Error"]	.	$_SESSION["car_price_Error"]		.	$_SESSION["car_description_Error"];
						?>
					</div>
					<br/>
					<?php } ?>
					
					

 		<?php include("notification.php"); ?>	



<br/>

 



		<form action="" method="POST">
			<div class="card card-info">
			<div class="card-header">
			<h3 class="card-title">Search Car details</h3>
			</div>
			<div class="card-body">
 

			<p>Enter Car Registraton Number to Generate Car Details</p>
			<div class="input-group input-group-sm">
			<input type="text" class="form-control" name="registration_number" value="<?php echo (isset($_POST['registration_number']) ?  $_POST['registration_number'] : ""); ?>" oninput="toUpperCase(this)">
			<span class="input-group-append">
			<button type="submit" name="search_car" class="btn btn-info btn-flat">Quick Lookup!</button>
			</span>
			</div>

			</div>

			</div>
	
	</form>
	
	<?php
	
	if(isset($_POST["search_car"]))
	{
		$registration_number		=	$_POST['registration_number'];
 
		// Call the function and store the return values in variables
		list($car_make, $car_model, $car_body_style, $car_year, $car_body_color, $car_transmission, $car_engine, $car_no_of_gears, $car_fuel_type, $status_message) = getCarDetails($registration_number);
		
		if($status_message =="success")
		{

			// Assign variables to session variables
			$_SESSION['car_make'] = $car_make;
			$_SESSION['car_model'] = $car_model;
			$_SESSION['car_body_style'] = $car_body_style;
			$_SESSION['car_year'] = $car_year;
			$_SESSION['car_body_color'] = $car_body_color;
			$_SESSION['car_transmission'] = $car_transmission;
			$_SESSION['car_engine'] = $car_engine;
			$_SESSION['car_no_of_gears'] = $car_no_of_gears;
			$_SESSION['car_fuel_type'] = $car_fuel_type;
			$_SESSION['status_message'] = $status_message;

 
				$custom_flash_msg = "Car Specification Retrieved!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
		 
		}
		else
		{
 
				$custom_flash_msg = "Car Information not Found!!";
				setFlashMessage($custom_flash_msg, 'error'); //set error or success
                header("location: ?");
		 			
		}
		
	
 
	}
	
	
	
	
	?>
	
             <!-- Horizontal Form -->
             <div class="card card-info">
               <div class="card-header">
                 <h3 class="card-title">Add Car Information </h3>
	 
			
               </div>
               <!-- /.card-header -->


               <!-- form start -->
			   <form action="" class="form-horizontal" method="POST"  enctype="multipart/form-data">

                 <div class="card-body">


            <div class="row">
          <div class="col-md-6">
		  
		  
		  
 
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td><b>Car Make</b></td>
                      <td><input required  type="text" name="car_make" value="<?php echo !empty($_SESSION['car_make']) ? $_SESSION['car_make'] : ''; ?>" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><b>Model</b></td>
                      <td><input required  type="text" name="car_model" value="<?php echo !empty($_SESSION['car_model']) ? $_SESSION['car_model'] : ''; ?>" class="form-control"></td>

                    </tr>
                    <tr>
                      <td><b>Body Style</b></td>
                      <td><input required  type="text" name="car_body_style"  value="<?php echo !empty($_SESSION['car_body_style']) ? $_SESSION['car_body_style'] : ''; ?>" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><b>Year</b></td>
                      <td><input required  type="text" name="car_year"   value="<?php echo !empty($_SESSION['car_year']) ? $_SESSION['car_year'] : ''; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                      <td><b>Condition</b></td>
                      <td>
					  <select  required name="car_condition" class="form-control">
					  
					  <option <?php echo !empty($_SESSION['car_condition']) ? 'selected' : ''; ?>>Brand New </option>
					  <option <?php echo !empty($_SESSION['car_condition']) ? 'selected' : ''; ?>>Fairly Used</option>
					  </select>
					  </td>
                    </tr>
					
                    <tr>
                      <td><b>Mileage (mi)</b></td>
                      <td><input required value="<?php echo !empty($_SESSION['car_mileage']) ? $_SESSION['car_mileage'] : '0'; ?>" type="number" name="car_mileage"  class="form-control"></td>
                    </tr>		


						
                    <tr>
                      <td><b>Transmission</b></td>
                      <td><input required  type="text" name="car_transmission"  value="<?php echo !empty($_SESSION['car_transmission']) ? $_SESSION['car_transmission'] : ''; ?>" class="form-control"></td>				  
                    </tr>				


 						
                  </tbody>
                </table>
     
          </div>
          <!-- /.col -->
          <div class="col-md-6">
 
                 <table class="table table-bordered">
                  <tbody>

                    <tr>
                      <td><b>Interior Color</b></td>
                      <td><input required  type="text" name="car_interior_color" value="<?php echo !empty($_SESSION['car_interior_color']) ? $_SESSION['car_interior_color'] : ''; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                      <td><b>Body Color</b></td>
                      <td><input required  type="text" name="car_body_color" value="<?php echo !empty($_SESSION['car_body_color']) ? $_SESSION['car_body_color'] : ''; ?>" class="form-control"></td>
                    </tr>

					
                    <tr>
                      <td><b>Engine</b></td>
                      <td><input required  type="number" name="car_engine"  value="<?php echo !empty($_SESSION['car_engine']) ? number_format($_SESSION['car_engine'], 1) : ''; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                      <td><b>No. of Gears</b></td>
                      <td><input required  type="text" name="car_no_of_gears" value="<?php echo !empty($_SESSION['car_no_of_gears']) ? $_SESSION['car_no_of_gears'] : ''; ?>" class="form-control"></td>
                    </tr>	

                    <tr>
                      <td><b>Location</b></td>
                      <td><input required   value = "<?php echo !empty($_SESSION['car_location']) ? $_SESSION['car_location'] : ''; ?>" type="text" name="car_location"  class="form-control"></td>
                    </tr>	

                    <tr>
                      <td><b>Fuel Type</b></td>
                      <td><input required  type="text" name="car_fuel_type" value="<?php echo !empty($_SESSION['car_fuel_type']) ? $_SESSION['car_fuel_type'] : ''; ?>" class="form-control"></td>
                    </tr>		


                    <tr>
                      <td><b>Price (&#163;)</b></td>
                      <td><input required  type="number" name="car_price" value = "<?php echo !empty($_SESSION['car_price']) ? $_SESSION['car_price'] : ''; ?>" type="text" name="car_price"   class="form-control"></td>
                    </tr>	
 
                  </tbody>
                </table>



          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


             <div class="card card-outline card-primary">
               <div class="card-header">
                 <h3 class="card-title">Description</h3>
				 </div> 
			   <div class="card-body">
			   
			   <textarea   name="car_description" col="6" class="form-control"><?php echo !empty($_SESSION['car_description']) ? $_SESSION['car_description'] : ''; ?></textarea> 
			   </div>
			   </div>
 

				</div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                   <button type="submit" name="save_info"  class="btn btn-info">Submit</button>
                   <button type="button"  onclick="window.location='?clear_form=true'" class="btn btn-default float-right">CLEAR FORM</button>
                 </div>
                 <!-- /.card-footer -->
               </form>
             </div>
             <!-- /.card -->


	
		
 

<br/>


 



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><script>document.write(new Date().getFullYear());</script> &copy;  </strong>
    <?php echo $company_name; ?>    <?php echo $company_name; ?> | Designed by <a href="www.linkedin.com/in/chrysanthus-obinna">Chrysanthus.C.</a>

    <div class="float-right d-none d-sm-inline-block">
     </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../_source/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../_source/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../_source/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../_source/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../_source/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../_source/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../_source/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../_source/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../_source/plugins/moment/moment.min.js"></script>
<script src="../_source/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../_source/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../_source/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../_source/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../_source/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../_source/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../_source/dist/js/demo.js"></script>

		<script>
			function toUpperCase(element) {
			// Get the current value of the input field
			var value = element.value;

			// Convert the value to uppercase
			var uppercaseValue = value.toUpperCase();

			// Update the input field value with the uppercase version
				element.value = uppercaseValue;
			}
		</script>
		
</body>
</html>


<?php

		if(isset($_GET["clear_form"]))
		{
			// Unset all the session variables
			unset(
				$_SESSION['car_make'],
				$_SESSION['car_model'],
				$_SESSION['car_body_style'],
				$_SESSION['car_year'],
				$_SESSION['car_condition'],
				$_SESSION['car_mileage'],
				$_SESSION['car_interior_color'],
				$_SESSION['car_body_color'],
				$_SESSION['car_transmission'],
				$_SESSION['car_engine'],
				$_SESSION['car_no_of_gears'],
				$_SESSION['car_location'],
				$_SESSION['car_fuel_type'],
				$_SESSION['car_description'],
				$_SESSION['car_price']
			);

			$custom_flash_msg = "Search Cleared!";
			setFlashMessage($custom_flash_msg, 'success'); //set error or success
			header("location: ?");

		}

?>


<?php

if(isset($_POST["save_info"]))
{


	$car_make						=			clean_input($_POST['car_make']);
	$car_model						=			clean_input($_POST['car_model']);
	$car_body_style					=			clean_input($_POST['car_body_style']);
	$car_year						=			clean_input($_POST['car_year']);
	$car_condition					=			clean_input($_POST['car_condition']);
	$car_mileage					=			clean_input($_POST['car_mileage']);
	$car_interior_color				=			clean_input($_POST['car_interior_color']);
	$car_body_color					=			clean_input($_POST['car_body_color']);
	$car_transmission				=			clean_input($_POST['car_transmission']);
	$car_engine						=			clean_input($_POST['car_engine']);
	$car_no_of_gears				=			clean_input($_POST['car_no_of_gears']);
	$car_location					=			clean_input($_POST['car_location']);
	$car_fuel_type					=			clean_input($_POST['car_fuel_type']);
	$car_description				=			clean_input($_POST['car_description']);
	$car_price						=			clean_input($_POST['car_price']);
 
		// Assign all the cleaned input values to session variables
		$_SESSION['car_make'] 			= clean_input($_POST['car_make']);
		$_SESSION['car_model']			= clean_input($_POST['car_model']);
		$_SESSION['car_body_style']		= clean_input($_POST['car_body_style']);
		$_SESSION['car_year']			= clean_input($_POST['car_year']);
		$_SESSION['car_condition']		= clean_input($_POST['car_condition']);
		$_SESSION['car_mileage']		= clean_input($_POST['car_mileage']);
		$_SESSION['car_interior_color'] = clean_input($_POST['car_interior_color']);
		$_SESSION['car_body_color']		= clean_input($_POST['car_body_color']);
		$_SESSION['car_transmission']	= clean_input($_POST['car_transmission']);
		$_SESSION['car_engine']			= clean_input($_POST['car_engine']);
		$_SESSION['car_no_of_gears']	= clean_input($_POST['car_no_of_gears']);
		$_SESSION['car_location']		= clean_input($_POST['car_location']);
		$_SESSION['car_fuel_type']		= clean_input($_POST['car_fuel_type']);
		$_SESSION['car_description']	= clean_input($_POST['car_description']);
		$_SESSION['car_price']			= clean_input($_POST['car_price']);


 
				function validateField($fieldName, $fieldValue, $errorMessage) {
					$_SESSION[$fieldName . "_Error"] = empty($fieldValue) ? "&#183; $errorMessage field is required <br/>" : "";
				}

				validateField("car_make", $car_make, "Car Make");
				validateField("car_model", $car_model, "Car Model");
				validateField("car_body_style", $car_body_style, "Body Style");
				validateField("car_year", $car_year, "Car Year");
				validateField("car_condition", $car_condition, "Car Condition");
				$_SESSION["car_mileage_Error"] = $car_mileage === "" ? "&#183; Car Mileage field is required <br/>" : "";
				validateField("car_interior_color", $car_interior_color, "Car Interior Color");
				validateField("car_body_color", $car_body_color, "Car Body Color");
				validateField("car_transmission", $car_transmission, "Car Transmission");
				validateField("car_engine", $car_engine, "Car Engine");
				validateField("car_no_of_gears", $car_no_of_gears, "No. of Gears");
				validateField("car_location", $car_location, "Car Location");
				validateField("car_fuel_type", $car_fuel_type, "Car Fuel Type");
				validateField("car_description", $car_description, "Car Description");
				validateField("car_price", $car_price, "Car Price");
				 
	 

		 
		  if(	!empty($_SESSION["car_make_Error"]) || 
				!empty($_SESSION["car_model_Error"]) || 
				!empty($_SESSION["car_body_style_Error"]) || 
				!empty($_SESSION["car_year_Error"])	||
				!empty($_SESSION["car_condition_Error"])	||
				!empty($_SESSION["car_mileage_Error"])	||
				!empty($_SESSION["car_interior_color_Error"])	||
				!empty($_SESSION["car_body_color_Error"])	||
				!empty($_SESSION["car_transmission_Error"])	||
				!empty($_SESSION["car_engine_Error"])	||
				!empty($_SESSION["car_no_of_gears_Error"])	||
				!empty($_SESSION["car_location_Error"])	||
				!empty($_SESSION["car_fuel_type_Error"])	||
				!empty($_SESSION["car_description_Error"])	||
				!empty($_SESSION["car_price_Error"])
				)
				{
					header("location: ?CarDetailsErrorMsg=true");
				}
				else
				{		

					mysqli_query($con,"INSERT INTO car_listing SET 	user_id	 			= 	'$logged_user_id',
																	car_make	 		= 	'$car_make',
																	car_model		 	= 	'$car_model',
																	car_body_style 		= 	'$car_body_style',
																	car_year		 	= 	'$car_year',
																	car_condition	 	= 	'$car_condition',
																	car_mileage 		= 	'$car_mileage',
																	car_interior_color	= 	'$car_interior_color',
																	car_body_color		= 	'$car_body_color',
																	car_transmission	= 	'$car_transmission',
																	car_engine			= 	'$car_engine',

																	car_no_of_gears		= 	'$car_no_of_gears',
																	car_location		= 	'$car_location',
																	car_fuel_type		= 	'$car_fuel_type',
																	car_description		= 	'$car_description',
																	car_price			= 	'$car_price' ");

				 
			// Unset all the session variables
			unset(
				$_SESSION['car_make'],
				$_SESSION['car_model'],
				$_SESSION['car_body_style'],
				$_SESSION['car_year'],
				$_SESSION['car_condition'],
				$_SESSION['car_mileage'],
				$_SESSION['car_interior_color'],
				$_SESSION['car_body_color'],
				$_SESSION['car_transmission'],
				$_SESSION['car_engine'],
				$_SESSION['car_no_of_gears'],
				$_SESSION['car_location'],
				$_SESSION['car_fuel_type'],
				$_SESSION['car_description'],
				$_SESSION['car_price']
			);

			$last_entry_id					 =			 mysqli_insert_id($con);

	 
			$custom_flash_msg = "Car Information has been Saved, Upload Photos to complete posting!";
			setFlashMessage($custom_flash_msg, 'success'); //set error or success
			header("location: add_photos.php?id=$last_entry_id");

		}

	}

?>