<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$e_id=$_GET["e_id"];
$_SESSION["e_id"]=$_GET["e_id"];
$query="select * from blog where id='$e_id'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($data);
$data=$row["blog_data"];
$link=$row["blog_link"];
$image=$row["background_image"];
$image1=$row["image"];


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
              <div class="form-group pb20 col-md-12"><h3 style="text-align:center;">Update Blogs</h3></div>
<div class="col-md-12 col-offset-2">
                <form name="image" action="update_blog.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-2">
             
             <img src="<?php echo $image;?>" width="90" height="90">
             </div>
             
              <div class="form-group col-md-3">
             
              <input type="file" class="form-control" name="fileupload4">
                 </div>
                 <div class="form-group col-md-2">
              <img src="<?php echo $image1;?>" width="90" height="90">
              </div>
                 <div class="form-group col-md-3">
              
              <input type="file" class="form-control" name="fileupload5">
                 </div>
                <div class="col-md-12">
             <div class="form-group col-md-5">
                
              <input type="text" class="form-control" name="data" placeholder="Blog data" value="<?php echo $data;?>" required>
                 </div>
                 
                 <div class="form-group col-md-5">
                    
              <input type="text" class="form-control" name="link" placeholder="Blog Link" value="<?php echo $link;?>">
                 </div>
                 </div>
                 <div class="form-group col-md-12" style="text-align:center; margin-top:3%;margin-bottom:5%;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
      
      
      </div>
      
          
          </div><!-- /.row (main row) -->
</div>
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

 
  
