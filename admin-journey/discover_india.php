
<?php
SESSION_START();
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 

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
           
           <h2 style="text-align:center; margin-top:4%;">Discover India</h2>
<div class=" col-md-12">
      <!--FORM -->
<form name="testimonials" id="testimonials" enctype="multipart/form-data"  action="insert_india.php" method="post" style="margin-top:3%;">
    <div class="col-md-4"><input type="file" class="form-control" name="fileupload" required/></div>
    <div class="col-md-4"><input type="text" name="city" class="form-control" placeholder="enter city name.." required /></div>
    <div class="col-md-4"><input type="text" name="package" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package1" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package2" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3"style="margin-top:3%;"><input type="text" name="package3" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package4" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-12" style="margin-top:3%;"><textarea name="about" class="form-control" placeholder="About City..." rows="5" required /></textarea></div>
    <div style=" text-align:center;" ><input type="submit" class="btn btn-info" name="submit" style="margin-top:4%;" ></div>
    </form>
    </div>
    <h2 style="margin-top:5%;text-align:center">Edit Discover India</h2>
    <div class="table-responsive">
    	<table class="table table-striped table-bordered text-center" style="margin-top:5%;" >
  <thead >
    <tr class="text-center">
      <th class="text-center col-md-1">IMAGE</th>
     
      <th class="text-center col-md-2">City</th>
      <th class="text-center col-md-3">About City</th>
      <th class="text-center col-md-1">Package Name</th>
      <th class="text-center col-md-1">Package Name</th>
      <th class="text-center col-md-1">Package Name</th>
      <th class="text-center col-md-1">Package Name</th>
      <th class="text-center col-md-1">Package Name</th>
      <th class="text-center col-md-1">ACTION</th>
    </tr>
  </thead>
  <?php 
  
    $query="select* from discover_india";
    $data=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($data))
    {
    $city=$row["city_name"];
    $image=$row["image"];
    $package=$row["package1"];
    $package1=$row["package2"];
    $package2=$row["package3"];
    $package3=$row["package4"];
    $package4=$row["package4"];
    $about=$row["about_city"];
    $id=$row["id"];


  ?>
  
    <tr>
        <td class="col-md-1"><image src="<?php echo $image?>" name="image" style="width:90px;height:90px;float:left;"></td>
      <td  class="col-md-2"><?php echo $city;?></td>
      <td  class="col-md-3"><?php echo $about;?></td>
      <td  class="col-md-1"><?php echo $package;?></td>
      <td  class="col-md-1"><?php echo $package1;?></td>
      <td  class="col-md-1"><?php echo $package2;?></td>
      <td  class="col-md-1"><?php echo $package3;?></td>
      <td  class="col-md-1"><?php echo $package4;?></td>
     
      
      
      <td><a href="edit_discover.php?e_id=<?php echo $id;?>"><button class="btn btn-primary">Edit</button></a><a href="delete_discover.php?d_id=<?php echo $id;?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr><?php }?>
</table>
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
 <?php include("includes/footer.php"); ?>  

 
  