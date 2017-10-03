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
$query1="select * from common_first where id='$id'";
$data=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($data);
$direct=$row["direct"];
$house=$row["house"];
$ending=$row["ending"];
$query="select * from common_date where id='$id'";
$data1=mysqli_query($conn,$query);
$row1=mysqli_fetch_assoc($data1);
$date1=$row1["date"];


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
     <h3><center>Update Common Number First Table</center></h3>
		     <form action='updatefirst.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    

    <div class="col-md-3 form-group"><label>Direct</label><br />
    <input type="text" name="direct" id="direct" class="form-control" value="<?php echo $direct;?>"></div>

    <div class="col-md-3 form-group"><label>House</label><br />
    <input type="text" name='house' class="form-control" value="<?php echo $house;?>"></div>
    <div class="col-md-3 form-group"><label>Ending</label><br />
    <input type="text" name="ending" class="form-control" value="<?php echo $ending;?>"></div>


    <span><input type='submit' name='submit' value='Submit' class="btn  btn-success" style="margin-top:25px;"></span>

</form>

<div class="container table-responsive col-md-12">
     <h3><center>Update Common Number Date</center></h3>
		     <form action='updatefirst.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    

    <div class="col-md-3 form-group"> <label>Date</label><br />
   
   <input type="text" placeholder="DD/MM/YYYY" name="date" id="date" class="form-control" value="<?php echo $date1;?>" ></div>

    

    <span><input type='submit' name='submit1' value='Submit' class="btn  btn-success" style="margin-top:24px;"></span>

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

