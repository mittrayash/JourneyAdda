<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);
if(isset($_POST["submit"]))
{
 $date=$_POST["date"];
 $day=$_POST["day"];
 $teer=$_POST["teer"];
 
 $query="INSERT INTO archery values('','$date','$day','$teer')";
 $data=mysqli_query($conn,$query);
 if($data)
   {
    echo '<script language="javascript">';
    echo 'alert("Value inserted")';
    echo '</script>';
   }
   else
   {
    echo '<script language="javascript">';
    echo 'alert("Error Inserting Value")';
    echo '</script>';
    }
}


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
     <h3><center>Manage Archery Details</center></h3>
		     <form action='archery.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Date</label><br />
    <input type="text" placeholder="DD/MM/YYYY" name="date" class="form-control" required>


<p><label>Day</label><br />
    <select name="day" class="form-control" required>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wedneday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
</select></p>

<p><label>Teer</label><br />
    <input type="text" name='teer' class="form-control" required></p>

    <p><input type='submit' name='submit' value='Submit' class="btn  btn-success"></p>

</form>

		    
		 
      <div class="table-responsive">
       <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		    
		       <tr>
		       
		        <th class="col-sm-2">Date</th>
		        <th class="col-sm-2">Day</th>
		        <th class="col-sm-3">Teer</th>
		       
                        <th class="col-sm-2">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    
		     
		    $query="SELECT * FROM archery order by id Desc";
		    $check=mysqli_query($conn,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $date=$row['date'];
		    $day=$row['day'];
		    $teer =$row['teer'];
		    
                    $id=$row['id'];
		  
		    ?>
		      <tr>
		        <td><?php echo $date; ?></td>
                        <td><?php echo $day; ?></td>
                        <td><?php echo $teer; ?></td>
		        
		       
		        
		        <td>
		        	<button class="btn btn-primary" style="width:80px;"><a href="editarchery.php?id=<?php echo $id; ?>" style="color:#fff;">EDIT</button>
		        	<button class="btn btn-danger"><a href="deletearchery.php?id=<?php echo $id; ?>" style="color:#fff">DELETE</button>
		        </td>
		      </tr>
		      <?php } ?>
		      
		    </tbody>
		  </table>
		 </div> 
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

