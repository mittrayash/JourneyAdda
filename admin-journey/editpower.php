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
$query1="select * from power where id='$id'";
$data=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($data);
$one=$row["one"];
$two=$row["two"];
$three=$row["three"];
$four=$row["four"];
$five=$row["five"];
$six=$row["six"];
$seven=$row["seven"];
$eight=$row["eight"];
$nine=$row["nine"];
$ten=$row["ten"];
$eleven=$row["eleven"];
$twelve=$row["twelve"];
$thirteen=$row["thirteen"];
$fourteen=$row["fourteen"];
$fifteen=$row["fifteen"];
$query="select * from power_date where id='$id'";
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
     <h3><center>Update Power Table</center></h3>
		      <form action='powerupdate.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    

    <div class="col-md-4 form-group"><label>1</label><br />
    <input type="text" name="one" id="one" class="form-control" value="<?php echo $one;?>"></div>

    <div class="col-md-4 form-group"><label>2</label><br />
    <input type="text" name='two' class="form-control" value="<?php echo $two;?>"></div>
    <div class="col-md-4 form-group"><label>3</label><br />
    <input type="text" name="three" class="form-control" value="<?php echo $three;?>"></div>
    <div class="col-md-4 form-group"><label>4</label><br />
    <input type="text" name="four" class="form-control" value="<?php echo $four;?>"></div>
    <div class="col-md-4 form-group"><label>5</label><br />
    <input type="text" name="five" class="form-control" value="<?php echo $five; ?>"></div>
    <div class="col-md-4 form-group"><label>6</label><br />
    <input type="text" name="six" class="form-control" value="<?php echo $six; ?>"></div>
     <div class="col-md-4 form-group"><label>7</label><br />
    <input type="text" name="seven" class="form-control" value="<?php echo $seven;?>"></div>
     <div class="col-md-4 form-group"><label>8</label><br />
    <input type="text" name="eight" class="form-control" value="<?php echo $eight;?>"></div>
     <div class="col-md-4 form-group"><label>9</label><br />
    <input type="text" name="nine" class="form-control" value="<?php echo $nine;?>"></div>
     <div class="col-md-4 form-group"><label>10</label><br />
    <input type="text" name="ten" class="form-control" value="<?php echo $ten;?>"></div>
     <div class="col-md-4 form-group"><label>11</label><br />
    <input type="text" name="eleven" class="form-control" value="<?php echo $eleven;?>"></div>
     <div class="col-md-4 form-group"><label>12</label><br />
    <input type="text" name="twelve" class="form-control" value="<?php echo $twelve;?>"></div>
     <div class="col-md-4 form-group"><label>13</label><br />
    <input type="text" name="thirteen" class="form-control" value="<?php echo $thirteen;?>"></div>
     <div class="col-md-4 form-group"><label>14</label><br />
    <input type="text" name="fourteen" class="form-control" value="<?php echo $fourteen;?>"></div>
     <div class="col-md-4 form-group"><label>15</label><br />
    <input type="text" name="fifteen" class="form-control" value="<?php echo $fifteen;?>"></div>
    <span><center><input type='submit' name='submit' value='Submit' class="btn  btn-success" style="margin-top:25px;"></center></span>

</form>

<div class="container table-responsive col-md-12">
     <h3><center>Update Power Date</center></h3>
		     <form action='powerupdate.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    

    <div class="col-md-3 form-group"> <label>Date</label><br />
    
   <input type="text" name="date" id="date" class="form-control" placeholder="DD/MM/YYYY"  value="<?php echo $date1;?>"></div>

    

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

