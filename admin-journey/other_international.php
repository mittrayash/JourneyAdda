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
$query="select * from international_package ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);
if(isset($_POST["submit"]))
{
    $package=$_POST["package"];
    $day=$_POST["day"];
    $night=$_POST["night"];
    $price=$_POST["price"];
    $about=$_POST["about"];
    $country=$_POST["country"];

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



$data="INSERT INTO international_package VALUES('','$target_file1','$package','$day','$night','$price','$about','$country','0')"; 
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
              <div class="pb20 col-md-12"><h2 style="text-align:center;">Add Other International Holidays Package</h2></div>
              
       </div>
      
       <table class="table table-striped table-bordered text-center table-responsive">
         <thead>
            <tr>
             <th class="text-center col-md-2">Images</th>
             <th class="text-center col-md-2">City Name</th>
              <th class="text-center col-md-2">Package</th>
               <th class="text-center col-md-1">Days</th>
               <th class="text-center col-md-1">Nights</th>
               <th class="text-center col-md-1">Price</th>
               <th class="text-center col-md-4">About the place</th>
               <th class="text-center col-md-1">Action</th>
             </tr>
         </theah>
<?php 

while($row=mysqli_fetch_assoc($data))
{
$id=$row["id"];
$image=$row["image"];
$country=$row["country"];
$package_name=$row["package_name"];
$day=$row["day"];
$night=$row["night"];
$price=$row["price"];
$about=$row["about"];
$status=$row["status"];
if($status==1)
{
    $add="Added";
}
else
{
    $add="Add";
}
?>
         <tbody>
            <tr>
                
              <td class="text-center col-md-2"><img src="<?php echo $image;?>" height="90" width="90"></td>
              <td class="text-center col-md-2"><?php echo $country;?></td>
              <td class="text-center col-md-2"><?php echo $package_name;?></td>
               <td class="text-center col-md-1"><?php echo $day;?></td>
               <td class="text-center col-md-1"><?php echo $night;?></td>
               <td class="text-center col-md-1"><?php echo $price;?></td>
               <td class="text-center col-md-4"><?php echo $about;;?></td>
              <td class=" form-group text-center col-md-1">
              <a href="edit_otherinterpackage.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;"><?php echo $add;?></button></a>
<a href="edit_otherinterpackage.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Remove</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM international_package";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='discover_country_package.php?page=".$i."'>".$i."</a></li>";  
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
		hrefTextPrefix : 'discover_country_package.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
