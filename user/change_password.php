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
        <a href="index.php" class="nav-link">Transfer</a>
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
            <h1 class="m-0 text-dark">Change Password</h1>
          </div><!-- /.col -->


        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content"  >
      <div class="container-fluid">

 
 
   <?php 
  		 
			if(	(isset($_GET['UpdateProfileErrorMsg'])) && ( !empty($_SESSION["password_Error"]))  ){ ?>

					
					<br/>
					<div class="alert alert-warning" role="alert">
						<?php
						echo $_SESSION["password_Error"];
				
				?>
					</div>
					<br/>
					<?php 		$_SESSION["password_Error"] =	"";  } ?>
					
					

			<?php include("notification.php"); ?>





	        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img style="width:100px;" id="profile_picture_img" class="profile-user-img img-fluid img-circle"
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
          <div class="col-md-8">


             <!-- Horizontal Form  transfer form 1 -->
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">Change Password </h3>
               </div>
               <!-- /.card-header -->



               <!-- form start -->
			   <form action="" class="form-horizontal" method="POST" >


                 <div class="card-body">



 <br/>


            <table class="table"> <tbody>

                  <tr>
                    <td>Old Password</td>
                    <td>
					<input class="form-control"   name="old_password"  type="text" placeholder="Old Password" required></td>
                   </tr>
	                  <tr>
                    <td>New Password</td>
                    <td>
					<input class="form-control"   name="new_password"  type="text" placeholder="New Password" required></td>
                   </tr>
	                  <tr>
                    <td>Re-type Password</td>
                    <td>
					<input class="form-control"   name="confirm_password"  type="text" placeholder="Re-type Password" required></td>
                   </tr>


             </tbody> </table>



				</div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                   <button type="submit" name="submit"  class="btn btn-primary">SUBMIT</button>
                   <button type="button" onclick="window.location='manage_user_profile.php'" class="btn btn-default float-right">BACK TO PROFILE</button>
                 </div>
                 <!-- /.card-footer -->
               </form>
             </div>
             <!-- /.card -->



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

$old_password			=			$_POST["old_password"];
$new_password			=			$_POST["new_password"];
$confirm_password		=			$_POST["confirm_password"];



		//VALIDATE password
		$_SESSION["password_Error"]					 		 =	""; 
		
        if(empty($new_password))
        {
 			$_SESSION["password_Error"]						.=	"&#183; Password is required <br/>";		
        }
		
		if($new_password != $confirm_password)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password Confirmation does not match <br/>";		
		}
		
		if(strlen($new_password) < 8)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password must be more than 8 characters in length <br/>";		
		}
		
		if(!password_verify($old_password, $logged_user_password))
		{
			$_SESSION["password_Error"]						.=	"&#183; Old Password is incorrect<br/>";		

		}				


	

		 
			if(	!empty($_SESSION["password_Error"])	)
				{
					header("location: ?UpdateProfileErrorMsg=true");
				}
				else
				{
 				$password 									= 	password_hash($new_password, PASSWORD_DEFAULT);

				mysqli_query($con,"UPDATE users	 SET 			password				=		'$password' WHERE email_address = '$_SESSION[user]'") or die(mysqli_error($con));
				
				unset($_SESSION["password_Error"]); 
				
																		
				$custom_flash_msg = "Password Changed!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
																			
				}



 
}


?>


