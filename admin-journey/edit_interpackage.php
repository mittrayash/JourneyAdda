<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$e_id=$_GET["e_id"];
$_SESSION=$_GET["e_id"];
$query1="Select * from international_package where id='$e_id'";
$row1=mysqli_query($conn,$query1);
$data1=mysqli_fetch_assoc($row1);
$image=$data1["image"];
$package_name=$data1["package_name"];
$price=$data1["price"];
$day=$data1["day"];
$night=$data1["night"];
$about=$data1["about"];
$city=$data1["country"];

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
           
            <div class="col-md-12 member" style="">
              <div class="pb20 col-md-12"><h2 style="text-align:center;">Edit International Package Details</h2></div>
               <form name="image" action="update_interpackage.php" method="post" enctype="multipart/form-data">
                   <input type="text" value="<?php echo $e_id;?>" name="id" style="display:none;">
              <div class="form-group col-md-4"  style="margin-bottom:5%;">
              <img src="<?php echo $image;?>" width="90" height="90">
              <input type="file" class="form-control" name="fileupload1" >
                 </div>
                 <div class="form-group col-md-4" style="margin-top:6.3%;">
                     <label>City Name</label>
              <input type="text" class="form-control" name="city" value="<?php echo $city;?>" placeholder=" Enter Country Name" required>
                 </div>
                 
              <div class="form-group col-md-4"  style="margin-top:6.3%;">
                  <label>Package Name</label>
              <input type="text" class="form-control" name="package" value="<?php echo $package_name;?>" placeholder="package name" required>
                 </div>
                 <div class="col-md-12">
                 <div class="form-group col-md-4" style="margin-bottom:5%;">
                     <label>No of Days</label>
              <input type="text" class="form-control" name="day" value="<?php echo $day;?>" placeholder=" Enter No. of days" required>
                 </div>
                 <div class="form-group col-md-4">
                     <label>No of Nights</label>
              <input type="text" class="form-control" value="<?php echo $night;?>" name="night" placeholder=" Enter No. of nights" required>
                 </div>
                 
                 <div class="form-group col-md-4">
                     <label>Price</label>
              <input type="text" class="form-control" value="<?php echo $price;?>" name="price" placeholder="Price" required>
                 
                 </div>
                 </div>
                 <div class="form-group col-md-12">
                    
              <textarea class="form-control" name="about" rows="6" placeholder="Details About the place" required><?php echo $about;?></textarea>
                 </div>
                 <div class="form-group col-md-12" style="text-align:center;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
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
		hrefTextPrefix : 'edit_inter_package.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
