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
$query="select * from international_itinerary ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);

if(isset($_POST["submit"]))
{
$about1=$_POST["about1"];
$about2=$_POST["about2"];
$about3=$_POST["about3"];
$package=$_POST["package"];


$target_dir = "images/";
$target_file1 = $target_dir .time().basename($_FILES["fileupload"]["name"]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
     if($check !== false) {
       
    } else {
       
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
  
}
// Check file size
if ($_FILES["fileupload"]["size"] > 5000000000) {
   
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
   
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file1)) {
        
    } else {
       
    }
}


$target_file2 = $target_dir .time().basename($_FILES["fileupload1"]["name"]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload1"]["tmp_name"]);
     if($check !== false) {
       
    } else {
        
    }
}
// Check if file already exists
if (file_exists($target_file2)) {
   
}
// Check file size
if ($_FILES["fileupload1"]["size"] > 5000000000) {
  
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
   
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload1"]["tmp_name"], $target_file2)) {
      
    } else {
       
    }
}

$target_file3 = $target_dir .time().basename($_FILES["fileupload2"]["name"]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload2"]["tmp_name"]);
     if($check !== false) {
       
    } else {
      
    }
}
// Check if file already exists
if (file_exists($target_file3)) {
   
}
// Check file size
if ($_FILES["fileupload2"]["size"] > 5000000000) {
  
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
   
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
} else {
    if (move_uploaded_file($_FILES["fileupload2"]["tmp_name"], $target_file3)) {
       
    } else {
       
    }
}

$data="INSERT INTO international_itinerary values('','$target_file1','$target_file2','$target_file3','$about1','$about2','$about3','$package')"; 
        $row=mysqli_query($conn,$data) or die(mysqli_error($conn));
if($row)
{
echo '<script language="javascript">';
echo 'alert("Value Inserted")';
echo '</script>';
}
else
{
echo '<script language="javascript">';
echo 'alert("Error Inserting Values")';
echo '</script>';
}

}
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
              <div class="form-group pb20 col-md-4"><h3 style="margin-left:6%;">Itinarary</h3></div><div class="container col-md-8" style="margin-top:1%;">
  
  <ul class="nav nav-pills">
    <li id="package"><a href="international_package_details.php">Package Details</a></li>
    <li class="active"><a href="international_itinerary.php">Itinerary</a></li>
    <li><a href="international_attractions.php">Attractions</a></li>
    <li><a href="international_inclusion.php">Inclusion/Exclusions</a></li>
    <li><a href="international_destination.php">Destination Info</a></li>
  </ul>
</div>
<div class="col-md-12">
               <form name="image" action="international_itinerary.php" method="post" enctype="multipart/form-data">
                  
                 
              <div class="form-group col-md-4">
              <input type="file" class="form-control" name="fileupload" placeholder="package name" required>
                 </div>
                 <div class="form-group col-md-4">
              <input type="file" class="form-control" name="fileupload1" placeholder="package name" required>
                 </div>
               <div class="form-group col-md-4">
              <input type="file" class="form-control" name="fileupload2" placeholder="package name" required>
                 </div>
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about1" placeholder="Enter itinerary details" rows="5" required></textarea>
                 </div>
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about2" placeholder="Enter itinerary details" rows="5" required></textarea>
                 </div>
				
                 <div class="form-group col-md-4">
              <textarea class="form-control" name="about3" placeholder="Enter itinerary details" rows="5" required></textarea>
                 </div>
				   <div class="form-group col-md-4">
              <input type="text" class="form-control" name="package" placeholder="Enter package name" required>
                 </div>
                 
                 <div class="form-group col-md-12" style="text-align:center;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
       <h2 style="text-align:center;margin-top:3%;margin-bottom:2%;">Edit Itinerary</h2>
	   <div class="table-responsive">
       <table class="table table-striped table-bordered text-center " style="width:1600px;">
         <thead>
            <tr>
             <th>Image1</th>
			 <th>Details1</th>
              <th>Image2</th>
			  <th>Details2</th>
               <th>Image3</th>
			   <th>Details3</th>
               <th>Package Name</th>
               
               <th>Action</th>
             </tr>
         </theah>
<?php 

while($row=mysqli_fetch_assoc($data))
{
$id=$row["id"];
$image1=$row["image1"];
$image2=$row["image2"];
$image3=$row["image3"];
$package_name=$row["package_name"];
$detail1=$row["detail1"];
$detail2=$row["detail2"];
$detail3=$row["detail3"];

?>
         <tbody>
            <tr>
              <td><img src="<?php echo $image1;?>" height="90" width="90"></td>
              <td><?php echo $detail1;?></td>
               <td ><img src="<?php echo $image2;?>" height="90" width="90"></td>
              <td ><?php echo $detail2;?></td>
			  <td><img src="<?php echo $image3;?>" height="90" width="90"></td>
              <td><?php echo $detail3;?></td>
               <td ><?php echo $package_name;?></td>
               
              <td>
              <a href="edit_itinerary.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;">Edit</button></a>
<a href="delete_itinerary.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Delete</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
	   </div>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM international_itinerary";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='international_itinerary.php?page=".$i."'>".$i."</a></li>";  
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
		hrefTextPrefix : 'international_itinerary.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
