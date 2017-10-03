<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$e_id=$_GET["e_id"];
$_SESSION["e_id"]=$_GET["e_id"];
$query1="Select * from testimonial where id='$e_id'";
$row1=mysqli_query($conn,$query1);
$data1=mysqli_fetch_assoc($row1);
$name=$data1["name"];
$about=$data1["data"];


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
              <div class="pb20 col-md-12"><h2 style="text-align:center;">Edit Testimonial</h2></div>
              <div class="col-md-12" style="margin-top:3%;">
               <form name="image" action="update_testimonial.php" method="post" enctype="multipart/form-data">
                  
              
              <div class="form-group col-md-4"  style="margin-bottom:5%;">
              <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder=" name" required>
                 </div>
                <div class="form-group col-md-4"  style="margin-bottom:5%;">
              <input type="text" class="form-control" name="data" value="<?php echo $about;?>" placeholder="About/Data" required>
                 </div>
                
                 <div class="form-group col-md-1" style="text-align:center;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
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

 
  
