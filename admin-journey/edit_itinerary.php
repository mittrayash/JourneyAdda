<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$e_id=$_GET["e_id"];
$_SESSION["e_id"]=$_GET["e_id"];
$query="select * from itinerary where id='$e_id'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($data);
$image1=$row["image1"];
$image2=$row["image2"];
$image3=$row["image3"];
$detail1=$row["detail1"];
$detail2=$row["detail2"];
$detail3=$row["detail3"];
$package_name=$row["package_name"];

?>
     <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
          <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <!--  <li class="active">Dashboard</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
              <!-- small box -->
           
            <div class="col-md-12 member">
              <div class="form-group pb20 col-md-12"><h3 style="text-align:center;">Update Package Details</h3></div>
<div class="col-md-12">
               <form name="image" action="update_itinerary.php" method="post" enctype="multipart/form-data">
                  <div class="col-md-12">
				  <div class="form-group col-md-1">
               <img src="<?php echo $image1?>" width="70" height="70">
                               </div>
              <div class="form-group col-md-3">
             
              <input type="file" class="form-control" name="fileupload4" >
                 </div>
				
				  <div class="form-group col-md-1">
               <img src="<?php echo $image2?>" width="70" height="70">
                   </div>
                 <div class="form-group col-md-3">
             
              <input type="file" class="form-control" name="fileupload5">
                 </div>
				
				  <div class="form-group col-md-1">
               <img src="<?php echo $image3?>" width="70" height="70">
                               </div>
                 <div class="form-group col-md-3">
             
              <input type="file" class="form-control" name="fileupload6">
                 </div>
                 
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about1" placeholder="Enter itinerary details" rows="5" required><?php echo $detail1;?></textarea>
                 </div>
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about2" placeholder="Enter itinerary details" rows="5" required><?php echo $detail2;?></textarea>
                 </div>
				
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about3" placeholder="Enter itinerary details" rows="5" required><?php echo $detail3;?></textarea>
                 </div>
				   <div class="form-group col-md-4">
              <input type="text" class="form-control" name="package" value="<?php echo $package_name;?>" placeholder="Enter package name" required>
                 </div>
                 </div>
                 <div class="form-group col-md-12" style="text-align:center;margin-top:5%;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
      
      
      </div>
      
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <style>
           .table-bordered {
    border: 1px solid #000;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>td{
	border:1px solid #000;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'images.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
