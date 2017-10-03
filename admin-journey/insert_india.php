<?php
include("connect.php");
if(isset($_POST["submit"])){
$city=$_POST["city"];
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
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
echo "<br/>";
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
echo "<br/>";
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
echo "<br/>";
}
// Check file size
if ($_FILES["fileupload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
echo "<br/>";
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
echo "<br/>";
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
echo "<br/>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
echo "<br/>";
    } else {
        echo "Sorry, there was an error uploading your file.";
echo "<br/>";
    }
}


}
$data="INSERT INTO discover_india  VALUES('','$city','$package','$package1','$package2','$package3','$package4','$target_file1','$about')"; 
        $row=mysqli_query($conn,$data) or die(mysqli_error($conn));
if($row)
{
header("location:discover_india.php");
}
else
{
echo 'Error inserting value';
}
?>