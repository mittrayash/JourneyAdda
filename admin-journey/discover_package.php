<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$limit=8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);
$query="select * from discover_country ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);

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
              <div class="pb20 col-md-12"><h2 style="text-align:center;">International Holidays</h2></div>
               <form name="testimonials" id="testimonials" enctype="multipart/form-data"  action="insert_inter.php" method="post" style="margin-top:3%;">
    <div class="col-md-4"><input type="file" class="form-control" name="fileupload" required/></div>
    <div class="col-md-4"><input type="text" name="country" class="form-control" placeholder="enter country name.." required /></div>
    <div class="col-md-4"><input type="text" name="package" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package1" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package2" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3"style="margin-top:3%;"><input type="text" name="package3" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-3" style="margin-top:3%;"><input type="text" name="package4" class="form-control" placeholder="enter package name" required /></div>
    <div class="col-md-12" style="margin-top:3%;"><textarea name="about" class="form-control" placeholder="About Country..." rows="5" required /></textarea></div>
    <div style=" text-align:center;" ><input type="submit" class="btn btn-info" name="submit" style="margin-top:4%;" ></div>
    </form>
       </div>
       <h2 style="text-align:center;margin-top:3%;margin-bottom:2%;">Edit International Holidays</h2>
       <table class="table table-striped table-bordered text-center table-responsive">
         <thead>
            <tr>
             <th class="text-center col-md-1">Images</th>
             <th class="text-center col-md-1">Country Name</th>
              <th class="text-center col-md-1">Package Name</th>
              <th class="text-center col-md-1">Package Name</th>
              <th class="text-center col-md-1">Package Name</th>
              <th class="text-center col-md-1">Package Name</th>
              <th class="text-center col-md-1">Package Name</th>
               <th class="text-center col-md-4">About</th></th>
              
               <th class="text-center col-md-1">Action</th>
             </tr>
         </theah>
<?php 

while($row=mysqli_fetch_assoc($data))
{
$id=$row["id"];
$image=$row["image"];
$country=$row["country"];
$package1=$row["package1"];
$package2=$row["package2"];
$package3=$row["package3"];
$package4=$row["package4"];
$package5=$row["package5"];
$about=$row["about_country"];

?>
         <tbody>
            <tr>
                
              <td class="text-center col-md-1"><img src="<?php echo $image;?>" height="90" width="90"></td>
              <td class="text-center col-md-1"><?php echo $country;?></td>
              <td class="text-center col-md-1"><?php echo $package1;?></td>
              <td class="text-center col-md-1"><?php echo $package2;?></td>
              <td class="text-center col-md-1"><?php echo $package3;?></td>
              <td class="text-center col-md-1"><?php echo $package4;?></td>
              <td class="text-center col-md-1"><?php echo $package5;?></td>
               <td class="text-center col-md-4"><?php echo $about;?></td>
               
              <td class=" form-group text-center col-md-1">
              <a href="edit_internationalpack.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;">Edit</button></a>
<a href="delete_internationalpack.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Delete</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM discover_country";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='discover_package.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
      
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
		hrefTextPrefix : 'discover_package.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
