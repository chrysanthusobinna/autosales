<?php
include("../set.php");
include("user_inc.php");
include('../functions.php');

    $query_no_car_listing				= mysqli_num_rows(mysqli_query($con,"SELECT * FROM car_listing WHERE user_id='$logged_user_id'"));
    $query_no_sold_cars					= mysqli_num_rows(mysqli_query($con,"SELECT * FROM car_listing WHERE user_id='$logged_user_id' AND sold='1'"));


 
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
  
   <!-- DataTables -->
  <link rel="stylesheet" href="../_source/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  
  
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->


        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




 		<?php include("notification.php"); ?>

 
 
 
 
       <!-- Small boxes (Stat box) -->
        <div class="row">
 
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $query_no_car_listing; ?></h3>

                <p>All Cars</p>
              </div>
              <div class="icon">
                <i class="icon ion-android-car"></i>
              </div>
			  <br/>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $query_no_sold_cars; ?></h3>

                <p>No. Sold Cars</p>
              </div>
              <div class="icon">
                <i class="ion-android-people"></i>
              </div>
			  <br/>
            </div>
          </div>
          <!-- ./col -->
 
        </div>
        <!-- /.row -->
	 
	 
	 
	 <div class="card card-outline card-primary">
  
    <div class="card-body">
 	<center>
			<img class="img-fluid"   src="../img/core-img/dashboard.png" alt="User Avatar">
			</center>
 

    </div>
  </div>
  
  
 	
	 
 
 
 	      <div class="row">
		  
        
		  
		  
          <div class="col-md-6 col-sm-6 col-12">
		   <a href="manage_cars.php" >
            <div class="info-box">
              <span class="info-box-icon bg-info"> <i class="fas fa-car"></i></span>

              <div class="info-box-content">
                <span class="info-box-number"> MANAGE LISTINGS</span>
              </div>
              <!-- /.info-box-content -->
            </div>
			</a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
		  
		  

		  
		  
          <div class="col-md-6 col-sm-6 col-12">
		   <a href="add_new_car.php" >
            <div class="info-box">
              <span class="info-box-icon bg-primary"> <i class="fas fa-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">SELL A CAR </span>
              </div>
              <!-- /.info-box-content -->
            </div>
			</a>
            <!-- /.info-box -->
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
    <?php echo $company_name; ?> | Designed by <a href="www.linkedin.com/in/chrysanthus-obinna">Chrysanthus.C.</a>
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

<!-- DataTables -->
<script src="../_source/plugins/datatables/jquery.dataTables.js"></script>
<script src="../_source/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

 
</body>
</html>


  