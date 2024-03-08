<?php
include("../set.php");
include("user_inc.php");
include("../functions.php");


if(!isset($_GET["id"])) { header("location: index.php?notif_err=Error"); }
$id		= $_GET["id"];
$query_car_record=mysqli_query($con,"SELECT * FROM car_listing WHERE id=$id");
if(mysqli_num_rows($query_car_record)==0){ header("location: index.php?notif_err=Error"); }

$query_info=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM car_listing WHERE id='$id'"));

 	$car_make						=			clean_output($query_info['car_make']);
	$car_model						=			clean_output($query_info['car_model']);
	$car_year						=			clean_output($query_info['car_year']);
	$no_of_uploaded_photos			=			clean_output($query_info['no_of_uploaded_photos']);
	
	$user_id						=			clean_output($query_info['user_id']);
	
	if($user_id 					!= 			$logged_user_id){  header("location: index.php");  }

?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $company_name; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../_source/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
   
  
   <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../_source/plugins/ekko-lightbox/ekko-lightbox.css">
  
  
  <!-- DataTables -->
  <link rel="stylesheet" href="../_source/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../_source/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


 

 

 
</head>
<body  class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
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
        <a href="logout.php" onclick="if (confirm('Are you Sure you want to Log out Now?')){return true;}else{event.stopPropagation(); event.preventDefault();};"   class="nav-link">Logout</a>
      </li>
    </ul>



  </nav>
  <!-- /.navbar -->

 <?php include("side_bar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">




 


		<?php include("notification.php"); ?>	

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Car Photos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Car Photos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


 
			<?php 
			$query_car_photos=mysqli_query($con,"SELECT * FROM car_photos WHERE car_id= '$id' ORDER BY id ASC") or die(mysqli_error($con)); 
			$no_photos			=	mysqli_num_rows($query_car_photos);
			
			?>





			 <form action="" class="form-horizontal" method="POST"  enctype="multipart/form-data">
			 <input type="hidden" name="car_id" value="<?php echo $id; ?>" >

             <!-- Horizontal Form -->
             <div class="card card-info">
               <div class="card-header">
                 <h3 class="card-title">Add Car Photos for <?php echo $car_make." ".$car_model." ".$car_year; ?> </h3>
				 </div>
               <!-- /.card-header -->
	 
 
                 <div class="card-body">
				 <?php if($no_photos ==0 ){ ?>
				 

					 <div class="callout callout-success">
					  <h5><i class="fas fa-exclamation-circle"></i> You should have atleast 1 or More Images for Car to be shown on public list!</h5>
					</div>
				 <?php } ?>	
					
				<table class="table table-bordered">
                  <tbody>

					<tr>
						<td>Car Photo</td>
						<td><input name="car_photo" required  type="file" class="form-control" id="fileInput1" accept="image/*" onchange="showSelectedImg(this);"   > </td>
						<td><center><img id="preview_img"   src="../car_pics/no_photo.png" width="100px"></center></td>
                    </tr>
 	 		
 
                  </tbody>
                </table>




				</div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                   <button type="submit" name="upload_img"  class="btn btn-info">Upload</button>
                   <button type="button"  onclick="window.location='?id=<?php echo $id; ?>'" class="btn btn-default float-right">Refresh</button>
                 </div>
                 <!-- /.card-footer -->
             </div>
             <!-- /.card -->
               </form>


	
	


      <div class="row">
        <div class="col-12">

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-image"></i> &nbsp; Photos for  <?php echo $car_make." ".$car_model." ".$car_year; ?>  ( <b><?php echo $no_of_uploaded_photos; ?> </b> ) </h3>
                 
              </div>
            <!-- /.card-header -->
            <div class="card-body">
			

			 <div class="filter-container p-0 row" >
 
 

		<?php
		if($no_photos > 0)
		{
 
		while($row=mysqli_fetch_array($query_car_photos))
		{
		$image_id			  	=			 $row["id"];
		$car_id					=			 $row['car_id'];
		$img_src				=			 $row['img_src'];

		?>
 			 
             <div class="card card-outline card-primary" style="margin:5px;">
              <div class="card-body" style="">
                       <a> <img style="height:150px;" src="<?php echo "../car_pics/".$img_src; ?>" class="img-fluid mb-2" alt="black sample"/> </a>
               </div> <!-- /.card-body -->
              <div class="card-footer"> 


					<button 
					data-car_id='<?php echo $car_id; ?>'
					data-image_id='<?php echo $image_id; ?>'
					data-car_full_name='<?php echo $car_make." ".$car_model." ".$car_year; ?>'
					data-toggle='modal' data-target='#modal-delete' 
					type="button" class="open-DeleteDialog  btn btn-danger btn-sm btn-block"><i class="fas fa-trash"></i></button>


              </div> <!-- /.card-footer-->
            </div>
			
		<?php }} else { echo ("<center> <b>NO PHOTO UPLOADED! </b></center>"); } ?>
					
            </div>
			
			
			
			</div>
            <!-- /.card-body -->
					<div class="card-footer ">
                   <button type="button"  onclick="window.location='index.php';" class="btn btn-secondary">DASHBOARD</button>
                   <button type="button" onclick="window.location='edit_car_info.php?id=<?php echo $id; ?>';"  class="btn btn-secondary float-right">BACK</button>
                 </div> <!-- /.card-footer --> 
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->










 

      <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"  >Delete Car Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

			<p>Are you Sure you want to Delete Image for <b id="car_full_name"></b>?</p>

            </div>
            <div class="modal-footer justify-content-between">
					<form action="" method="POST">
					<input type="hidden" name="image_id" id="image_id"/>
					<input type="hidden" name="car_id" id="car_id"/>
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










 


      </div>
      <!-- /.row -->
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
<!-- Bootstrap 4 -->
<script src="../_source/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->

<!-- jQuery UI -->
<script src="../_source/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../_source/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
 
<script src="../_source/plugins/datatables/jquery.dataTables.js"></script>
<script src="../_source/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../_source/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../_source/dist/js/demo.js"></script>
<!-- page script -->
  
  
  <script>

function showSelectedImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#preview_img').attr('src', e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}


</script>

   <script>
 
 $(function(){
   $(".open-DeleteDialog").click(function(){
      $('#image_id').val($(this).data('image_id'));
      $('#car_id').val($(this).data('car_id'));
	  $("#car_full_name").html($(this).data('car_full_name'));

   });
});

</script>

 

</body>
</html>


  
<?php
if(isset($_POST["delete"]))
{

		$image_id									=			clean_input($_POST["image_id"]);
		$car_id										=			$_POST["car_id"];
		
		$query_info=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM car_listing WHERE id='$car_id'"));
		$no_of_uploaded_photos						=			clean_output($query_info['no_of_uploaded_photos']);
		$no_of_uploaded_photos--;



		//ftech photo url
 		$query_car_photos=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM car_photos WHERE id='$image_id'")) or die(mysqli_error($con));
		$img_src				=			 "../car_pics/".$query_car_photos['img_src'];
  

  
		//delete file from dir
		unlink($img_src);		
		
		
		mysqli_query($con,"DELETE FROM car_photos WHERE id='$image_id'") or die(mysqli_error($con));
		
		mysqli_query($con,"UPDATE car_listing SET  no_of_uploaded_photos = '$no_of_uploaded_photos' WHERE id = '$car_id'") or die(mysqli_error($con));


		$custom_flash_msg = "Car Photo has been Deleted!";
		setFlashMessage($custom_flash_msg, 'success'); //set error or success
		header("location: ?id=$car_id");
		}

?>








<?php

if(isset($_POST["upload_img"]))
{

	$car_id							=			$_POST["car_id"];

	$query_info=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM car_listing WHERE id='$car_id'"));
	$no_of_uploaded_photos			=			clean_output($query_info['no_of_uploaded_photos']);
	$no_of_uploaded_photos++;



	if(!empty($_FILES["car_photo"]["name"])){

		  	$new_car_photo			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../car_pics/";


			$img_allowed_types		 =	array('jpg','gif','png','bmp','jpeg','JPG','GIF','PNG','BMP','JPEG');
			$car_photo					 = 	$_FILES["car_photo"]["name"];
			$img_ext				 =	pathinfo($car_photo, PATHINFO_EXTENSION);



				if(!in_array($img_ext, $img_allowed_types))
				{
				$custom_flash_msg = "image type is not an allowed type!";
				setFlashMessage($custom_flash_msg, 'error'); //set error or success
	
                header("location: ?id=$car_id");
                exit();
				}
				else
				{
				move_uploaded_file($_FILES["car_photo"]["tmp_name"], $folder.$car_photo);
				$new_car_photo				 =	time().rand(1000,9000).".".$img_ext;
				rename($folder.$car_photo,$folder.$new_car_photo);

				mysqli_query($con,"INSERT INTO  car_photos SET  car_id	=	'$car_id' , img_src	= '$new_car_photo'") or die(mysqli_error($con));
				
				mysqli_query($con,"UPDATE car_listing SET  no_of_uploaded_photos = '$no_of_uploaded_photos' WHERE id = '$car_id'") or die(mysqli_error($con));
				
				
				$custom_flash_msg = "Car Photo uploaded successfully!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?id=$car_id");
	
				}



	}


 
}

?>
