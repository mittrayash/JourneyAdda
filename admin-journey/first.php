<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);



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
     <h3><center>Manage Common Number First Table</center></h3>
		   
		 
      
       <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		    
		       <tr>
		       
		        <th class="col-sm-2">Direct</th>
		        <th class="col-sm-2">House</th>
		        <th class="col-sm-3">Ending</th>
		       
                        <th class="col-sm-2">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    $db=mysqli_connect('localhost','urjentup_teer','teer@123','urjentup_teer');
		    
		     
		    $query="SELECT * FROM common_first order by id Desc";
		    $check=mysqli_query($db,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $direct=$row['direct'];
		    $house=$row['house'];
		    $ending =$row['ending'];
		    
                    $id=$row['id'];
		  
		    ?>
		      <tr>
		        <td><?php echo $direct; ?></td>
                        <td><?php echo $house; ?></td>
                        <td><?php echo $ending; ?></td>
		        
		       
		        
		        <td>
		        	<button class="btn btn-primary" style="width:80px;"><a href="editfirst.php?id=<?php echo $id; ?>" style="color:#fff;">EDIT</button>
		        	
		        </td>
		      </tr>
		      <?php } ?>
		      
		    </tbody>
		  </table>
		  
		  
   </div>
   
    <div class="container table-responsive col-md-12">
     <h3><center>Manage Common Number Date</center></h3>
		   

		    
		 
      
       <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		    
		       <tr>
		       
		        <th class="col-sm-2">Date</th>
		        
		       
                        <th class="col-sm-2">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    
		    
		     
		    $query="SELECT * FROM common_date order by id Desc";
		    $check=mysqli_query($conn,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $date=$row['date'];
		  
                    $id=$row['id'];
		  
		    ?>
		      <tr>
		        <td><?php echo $date; ?></td>
                       
		       
		        
		        <td>
		        	<button class="btn btn-primary" style="width:80px;"><a href="editfirst.php?id=<?php echo $id; ?>" style="color:#fff;">EDIT</button>
		        	
		        </td>
		      </tr>
		      <?php } ?>
		      
		    </tbody>
		  </table>
		  
		  
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

