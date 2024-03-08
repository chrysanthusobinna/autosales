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
              </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


		<?php include("notification.php"); ?>





			<?php 		
			$query_trx=mysqli_query($con,"SELECT * FROM car_listing WHERE user_id='$logged_user_id' ORDER BY id DESC") or die(mysql_error()); ?>

              <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">( <?php echo mysqli_num_rows($query_trx); ?> ) Cars</h3>
					 <div class="card-tools">
              <button onclick="window.location='add_new_car.php'" type="button" class="btn btn-default btn-sm" > + ADD NEW CAR </button>
             
            </div>
						 
              </div>
              <!-- /.card-header -->


            <div class="card-body table-responsive">

              <table id="example1" class="table table-bordered table-striped" style="height: 265px;">
                  <thead>
                    <tr>
                      <th>MAKE </th>
                      <th>MODEL</th> 
                      <th>YEAR</th> 
                      <th>PRICE</th> 
                      <th>#</th> 
                    </tr>
                  </thead>
                  <tbody>
				  


<?php


while($query_accounts=mysqli_fetch_array($query_trx))
{
  $id						=			 $query_accounts['id'];
  $car_make					=			 $query_accounts['car_make'];
  $car_model				=			 $query_accounts['car_model'];
  $car_year					=			 $query_accounts['car_year'];
  $car_price				=			 $query_accounts['car_price']; 

?>
					  <tr>
                      <td><b><?php echo $car_make; ?></b></td>
                      <td><?php echo $car_model; ?></td>
                      <td><?php echo $car_year; ?></td>
                      <td>&#163;<?php echo number_format($car_price); ?></td>
					  
					  
					  <td>
                      <a href="edit_car_info.php?id=<?php echo $id; ?>" class="btn-sm btn btn-success"><i class="fas fa-edit"></i> EDIT</a>
					  					  
                      <button
					  data-p_id='<?php echo $id; ?>'
					  data-toggle='modal' data-target='#modal-delete'  type="button"  class="btn-sm open-DeleteDialog btn btn-danger"><i class="fas fa-trash"></i> DELETE</button>

                      <a href="../car_details.php?id=<?php echo $id; ?>" target="_blank" class="btn-sm btn btn-primary"><i class="fas fa-eye"></i> VIEW</a>
					  
					  </td>



                      </tr>
<?php } ?>				  



<?php if((mysqli_num_rows($query_trx))==0){ ?>

					  <tr>
                      <td>No Record(s)</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>

<?php } ?>
             
			 
                  </tbody>		
                <tfoot>
                <tr>
                    <tr>
                     <th>MAKE </th>
                      <th>MODEL</th> 
                      <th>YEAR</th> 
                      <th>PRICE</th> 
                      <th>#</th> 
                    </tr>
                </tr>
                </tfoot>				  
                 </table>
				 
  
  

              </div>
                  <!-- /.card-body -->
  
            </div>
            <!-- /.card -->















      <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"  >Delete Car Imformation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

			<p>Are you Sure you want to Delete This Car Information ?</p>

            </div>
            <div class="modal-footer justify-content-between">
					<form action="" method="POST">
					<input type="hidden" name="id" id="p_id"/>
                   <button type="submit" name="delete"  class="btn btn-primary">YES</button>
				   </form>
                   <button type="button"   data-dismiss="modal" class="btn btn-danger float-right">NO</button>
           </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


















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



<!-- DataTables -->
<script src="../_source/plugins/datatables/jquery.dataTables.js"></script>
<script src="../_source/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script>
  $(function () {
 	
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>


<script>
  $(function () {
 	
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>



  <script>
 $(function(){
   $(".open-DeleteDialog").click(function(){
      $('#p_id').val($(this).data('p_id'));

   });
});

</script>



</body>
</html>




<?php
if(isset($_POST["delete"]))
{

		$id						=			 $_POST["id"];

		mysqli_query($con,"DELETE FROM car_listing WHERE id='$id'") or die(mysqli_error($con));

		$custom_flash_msg = "Car Information has been Deleted";
		setFlashMessage($custom_flash_msg, 'success'); //set error or success
		header("location: ?");

}

?>