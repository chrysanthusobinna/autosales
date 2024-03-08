<?php
include("../set.php");
include("user_inc.php");
include("../functions.php");


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
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
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
        <a href="logout.php" class="nav-link">Logout</a>
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
            <h1 class="m-0 text-dark">Edit Profile</h1>
          </div><!-- /.col -->

        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

  
  <?php 
  		 
			if(	(isset($_GET['UpdateProfileErrorMsg'])) &&
				(
				!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["whatsapp_contact_Error"]) 
				) 
				){ ?>

					
					<br/>
					<div class="alert alert-warning" role="alert">
						<?php
						echo $_SESSION["first_name_Error"] . $_SESSION["last_name_Error"] . $_SESSION["phone_number_Error"] . $_SESSION["whatsapp_contact_Error"];
						?>
					</div>
					<br/>
					<?php } ?>
					
					

	 		<?php include('notification.php'); ?>

 
	        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../uploads/<?php echo $profile_picture; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $first_name." ".$last_name; ?> </h3>

 
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b class="text-center"><?php echo $_SESSION["user"]; ?></b>
                  </li>

                </ul>
				<hr/>
                          <button type="button" onclick="window.location='change_password.php'" class="btn-block btn btn-primary">Change Password</button>
                          <button type="button" onclick="window.location='change_profile_pic.php'" class="btn-block btn btn-primary">Change Profile Photo</button>
				<hr/>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
			  Edit Profile
             </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                    <form  action="" method="POST" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $first_name; ?>"  name="first_name" placeholder="Full Name" required>
                        </div>
                      </div>
					  
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $last_name; ?>"  name="last_name" placeholder="Last Name" required>
                        </div>
                      </div>

					  
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="<?php echo $phone_number; ?>"  name="phone_number"  placeholder="Phone Number" required>
                        </div>
                      </div>
					  
					  
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Whatsapp Contact</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="<?php echo $whatsapp_contact; ?>"  name="whatsapp_contact"  placeholder="Whatsapp Contact" required>
                        </div>
                      </div>
					  					  
					  
                       <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                          <button type="button" onclick="javascript: history.go(-1);" class="btn btn-danger">Back</button>
                        </div>
                      </div>
                    </form>



                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">

                 </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->










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
  
</body>
</html>

<?php

if(isset($_POST["submit"])){

		$first_name								=			$_POST["first_name"];
		$last_name								=			$_POST["last_name"];
		$phone_number							=			$_POST["phone_number"];
		$whatsapp_contact						=			$_POST["whatsapp_contact"];
 



  
		$_SESSION["first_name"]					=			clean_input(ucwords($_POST['first_name']));
		$_SESSION["last_name"]					=			clean_input(ucwords($_POST['last_name']));
		$_SESSION["phone_number"]				=			clean_input($_POST['phone_number']);
		$_SESSION["whatsapp_contact"]			=			clean_input($_POST['whatsapp_contact']);

 
  

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

		
		
		

		 
		  if(	!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["whatsapp_contact_Error"])
				)
				{
					header("location: ?UpdateProfileErrorMsg=true");
				}
				else
				{
 
						mysqli_query($con,"UPDATE users	 SET 			first_name				=		'$first_name', 
																		last_name				=		'$last_name', 
																		phone_number			=		'$phone_number', 																		
																		whatsapp_contact		=		'$whatsapp_contact' 	WHERE email_address = '$_SESSION[user]'") or die(mysqli_error($con));
				
				unset($_SESSION["first_name_Error"]);
				unset($_SESSION["last_name_Error"]);
				unset($_SESSION["phone_number_Error"]);
				unset($_SESSION["whatsapp_contact_Error"]);
				
																		
				$custom_flash_msg = "Profile Information Updated!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
																			
				}
 
}


?>