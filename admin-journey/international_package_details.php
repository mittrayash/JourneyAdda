<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
include("international_package_insert.php");
$limit=8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);
$query="select * from international_package_details ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);



?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
              <div class="form-group pb20 col-md-4"><h3 style="margin-left:6%;">International Package Details</h3></div><div class="container col-md-8" style="margin-top:1%;">
  
  <ul class="nav nav-pills">
    <li class="active" id="package"><a href="international_package_details.php">Package Details</a></li>
    <li><a href="international_itinerary.php">Itinerary</a></li>
    <li><a href="international_attractions.php">Attractions</a></li>
    <li><a href="international_inclusion.php">Inclusion/Exclusions</a></li>
     <li><a href="international_destination.php">Destination Info</a></li>
  </ul>
</div>
<div class="col-md-12">
               <form name="image" action="international_package_details.php" method="post" enctype="multipart/form-data">
                   <div class="form-group col-md-4">
             
              <input type="text" class="form-control" name="name" placeholder="Enter Name of the Package" required>
                 </div>
                    <div class="form-group col-md-4">
              <input type="text" class="form-control" name="place" placeholder="Places to visit.." required>
                 </div>
                
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="experience" placeholder="Experiences" required>
                 </div>
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="experience1" placeholder="Experiences">
                 </div>
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="experience2" placeholder="Experience" >
                 </div>
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="experience3" placeholder="Experiences">
                 </div>
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="experience4" placeholder="Experiences">
                 </div>
              <div class="form-group col-md-4">
             
              <input type="file" class="form-control" name="fileupload" required>
                 </div>
                 <div class="form-group col-md-4">
             
              <input type="file" class="form-control" name="fileupload1" required>
                 </div>
                 <div class="form-group col-md-4">
             
              <input type="file" class="form-control" name="fileupload2" required>
                 </div>
                 
                 <div class="form-group col-md-12" style="text-align:center;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
       <h2 style="text-align:center;margin-top:6%;margin-bottom:2%;">Edit International Package Details</h2>
       <table class="table table-striped table-bordered text-center table-responsive">
         <thead>
            <tr>
             <th class="text-center col-md-2">Image1</th>
			 <th class="text-center col-md-1">Image2</th>
			 <th class="text-center col-md-1">Image3</th>
			 <th class="text-center col-md-2">Package Name</th>
             <th class="text-center col-md-2">Places to visit</th>
             <th class="text-center col-md-1">Experiences</th>
             <th class="text-center col-md-1">Action</th>
             </tr>
         </theah>
<?php 
$query1="select * from international_package_details";
$data1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_assoc($data1))
{
$id=$row1["id"];
$img1=$row1["image1"];
$img2=$row1["image2"];
$img3=$row1["image3"];
$place1=$row1["place1"];

$experience1=$row1["experience1"];
$experience2=$row1["experience2"];
$experience3=$row1["experience3"];
$experience4=$row1["experience4"];
$experience5=$row1["experience5"];
$package_name=$row1["package_name"];
?>
         <tbody>
            <tr>
              <td class="text-center col-md-2"><img src="<?php echo $img1;?>" height="90" width="90"></td>
			  
              <td class="text-center col-md-2"><img src="<?php echo $img2;?>" height="90" width="90"></td>
			  
              <td class="text-center col-md-2"><img src="<?php echo $img3;?>" height="90" width="90"></td>
			  <td class="text-center col-md-2"><?php echo $package_name;?></td>
			  
              <td class="text-center col-md-2"><?php echo $place1;?></td>
              <td class="text-center col-md-2"><?php echo $experience1;?>,<?php echo $experience2;?>,<?php echo $experience3;?>,<?php echo $experience4;?>,<?php echo $experience5;?></td>
                             <td class=" form-group text-center col-md-1">
              <a href="edit_ipackage_details.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;">Edit</button></a>
<a href="delete_ipackage_details.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Delete</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM package_details";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='package_details.php?page=".$i."'>".$i."</a></li>";  
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
		hrefTextPrefix : 'package_details.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
