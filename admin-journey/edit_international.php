
<?php
SESSION_START();
$_SESSION["e_id"]=$_GET["e_id"];

include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$e_id=$_GET["e_id"];

  $query="select* from international where id='$e_id'";
    $data=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($data);
  
    $c_name=$row["country"];
    $image=$row["image1"];
    $package=$row["package"];
    $package1=$row["package1"];
    $package2=$row["package2"];
    $package3=$row["package3"];
    $package4=$row["package4"];
    $about=$row["about"];
    $id=$row["id"];




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
           
           <h2 style="text-align:center; margin-top:4%;">Edit International Holidays</h2>
<div class=" col-md-12"> 
      <!--FORM -->
<form name="testimonials" id="testimonials" enctype="multipart/form-data"  action="update_international.php" method="post" style="margin-top:3%;">
    <div class="col-md-3" style="margin-bottom:2%;"><img src="<?php echo $image;?>" width="70" height="70"></div>
    <div class="col-md-3" style="margin-bottom:6%;"><input type="file" class="form-control"  name="fileupload1"></div>
    <div class="col-md-3" style="margin-bottom:6%;"><input type="text" name="country" class="form-control" placeholder="enter counry name.." value="<?php echo $c_name;?>" required/></div>
    <div class="col-md-3" style="margin-bottom:6%;"><input type="text" name="package" class="form-control" placeholder="enter package name" value="<?php echo $package;?>" required/></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package1" class="form-control" placeholder="enter package name" value="<?php echo $package1;?>" required/></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package2" class="form-control" placeholder="enter package name" value="<?php echo $package2;?> "required/></div>
    <div class="col-md-3"style="margin-top:3%;"><input type="text" name="package3" class="form-control" placeholder="enter package name" value="<?php echo $package3;?>" required/></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package4" class="form-control" placeholder="enter package name"value="<?php echo $package4;?>" required/></div>
    <div class="col-md-12" style="margin-top:3%;"><textarea name="about" class="form-control" placeholder="About City..." rows="5"  required/><?php echo $about;?></textarea></div>
    <div style=" text-align:center;" ><input type="submit" class="btn btn-info" name="submit" style="margin-top:4%;" ></div>
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
 <?php include("includes/footer.php"); ?>  

 
  