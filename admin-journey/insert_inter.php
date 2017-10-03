<?php 

include("connect.php");
if(isset($_POST["submit"])){
$country=$_POST["country"];
$about=$_POST["about"];
$package=$_POST["package"];
$package1=$_POST["package1"];
$package2=$_POST["package2"];
$package3=$_POST["package3"];
$package4=$_POST["package4"];
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


}
$data="INSERT INTO discover_country  VALUES('','$country','$package','$package1','$package2','$package3','$package4','$target_file1','$about')"; 
        $row=mysqli_query($conn,$data) or die(mysqli_error($conn));
if($row)
{
header("location:discover_package.php");
}
else
{
   echo "Error Inserting Value";
}
?>