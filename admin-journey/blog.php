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
$query="select * from blog ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);

if(isset($_POST["submit"]))
{
$data=$_POST["data"];
$link=$_POST["link"];
$target_dir = "images/";
$target_file1 = $target_dir . basename($_FILES["fileupload"]["name"]);


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
list($height,$width)=getimagesize($_FILES["fileupload"]["tmp_name"]);
$height1=380;
            $width1=480;

             if ($width!=$width1 && $height!=$height1) {
             $errors[] = 'File too large. File must be less than 2 megabytes.';
            
              }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file1)) {
        
    } else {
       
    }
}


$target_file2 = $target_dir . basename($_FILES["fileupload1"]["name"]);


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


if(count($errors) == 0) {
$data="INSERT INTO blog values('','$target_file1','$target_file2','$data','$link')"; 
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
else
{
    echo '<script language="javascript">';
echo 'alert("Upload image of width=96 and height=64")';
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
              <div class="form-group pb20 col-md-4"><h3 style="margin-left:6%;">Blog Insert</h3></div><div class="container col-md-8" style="margin-top:1%;">
  
 
</div>
<div class="col-md-12">
               <form name="image" action="blog.php" method="post" enctype="multipart/form-data">
             
              <div class="form-group col-md-3">
             <label>Background Image</label>
              <input type="file" class="form-control" name="fileupload" required>
                 </div>
                 <div class="form-group col-md-3">
             <label>Image</label>
              <input type="file" class="form-control" name="fileupload1" required>
                 </div>
                
             <div class="form-group col-md-3">
                 <label>Blog Data</label>
              <input type="text" class="form-control" name="data" placeholder="Blog data" required>
                 </div>
                 
                 <div class="form-group col-md-3">
                     <label>Blog Link</label>
              <input type="text" class="form-control" name="link" placeholder="Blog Link">
                 </div>
                 
                 <div class="form-group col-md-12" style="text-align:center; margin-top:3%;margin-bottom:5%;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
       <h2 style="text-align:center;margin-top:6%;margin-bottom:2%;">Edit Blogs</h2>
       <table class="table table-striped table-bordered text-center table-responsive">
         <thead>
            <tr>
             <th class="text-center col-md-2">Banner Image</th>
			 <th class="text-center col-md-1">Image</th>
			 <th class="text-center col-md-2">Blog Data</th>
             <th class="text-center col-md-2">Blog Link</th>
             <th class="text-center col-md-1">Action</th>
             </tr>
         </theah>
<?php 
$query1="select * from blog";
$data1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_assoc($data1))
{
$id=$row1["id"];
$img1='http://urjentupccodes.com/journeyadda/admin-journey/'.$row1["background_image"];
$img2='http://urjentupccodes.com/journeyadda/admin-journey/'.$row1["image"];
$data=$row1["blog_data"];
$link=$row1["blog_link"];

?>
         <tbody>
            <tr>
              <td class="text-center col-md-2"><img src="<?php echo $img1;?>" height="90" width="90"></td>
			  
			  
              <td class="text-center col-md-2"><img src="<?php echo $img2;?>" height="90" width="90"></td>
			  
			  
              <td class="text-center col-md-2"><?php echo $data;?></td>
              		  
              <td class="text-center col-md-2"><?php echo $link;?></td>
              
             <td class=" form-group text-center col-md-1">
              <a href="edit_blog.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;">Edit</button></a>
<a href="delete_blog.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Delete</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM blog";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='blog.php?page=".$i."'>".$i."</a></li>";  
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
		hrefTextPrefix : 'blog.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
