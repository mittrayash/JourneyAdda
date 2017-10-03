<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);
$id=$_GET["id"];
$_SESSION["id"]=$_GET["id"];
$query1="select * from previous_results where id='$id'";
$data=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($data);

$fr_num=$row["fr_number"];
$sr_num=$row["sr_number"];
$date=$row["date"];

?>
    
   <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
   
		     <form action='editresult_details.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Date</label><br />
    <input type="text" placeholder="DD/MM/YYYY" name="date" class="form-control" value="<?php echo $date;?>">
 <p><input type='submit' name='submit' value='Submit' class="btn  btn-success"></p>

</form>
<form action='editresult_details.php' method='post' enctype="multipart/form-data" >
    

<p><label>F/R Number</label><br />
    <input type="text" name='fr_number' class="form-control" value="<?php echo $fr_num;?>"></p>

<p><label>S/R Number</label><br />
    <input type="text" name='sr_number' class="form-control" value="<?php echo $sr_num;?>"></p>

    <p><input type='submit' name='submit1' value='Submit' class="btn  btn-success"></p>


</form>

		    
		 
      
      
   </div>
                
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
             
             
              <!-- /.box -->


            </section><!-- /.Left col -->
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
     
      </div><!-- /.content-wrapper -->
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>
	  
 <?php include("includes/footer.php"); ?>  

