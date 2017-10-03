<?php 
if(isset($_POST["submit"]))
{
$place=$_POST["place"];
$experience=$_POST["experience"];
$experience1=$_POST["experience1"];
$experience2=$_POST["experience2"];
$experience3=$_POST["experience3"];
$experience4=$_POST["experience4"];
$name=$_POST["name"];
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
list($height,$width)=getimagesize($_FILES["fileupload2"]["tmp_name"]);
$height1=700;
            $width1=438;

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
list($height,$width)=getimagesize($_FILES["fileupload2"]["tmp_name"]);
$height1=700;
            $width1=438;

             if ($width!=$width1 && $height!=$height1) {
             $errors[] = 'File too large. File must be less than 2 megabytes.';
           
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

$target_file3 = $target_dir . basename($_FILES["fileupload2"]["name"]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload2"]["tmp_name"]);
     if($check !== false) {
       
    } else {
      
    }
}
list($height,$width)=getimagesize($_FILES["fileupload2"]["tmp_name"]);
$height1=700;
            $width1=438;

             if ($width!=$width1 && $height!=$height1) {
             $errors[] = 'File too large. File must be less than 2 megabytes.';
           
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
if(count($errors) == 0) {
$data="INSERT INTO package_details values('','$place','$experience','$experience1','$experience2','$experience3','$experience4','$target_file1','$target_file2','$target_file3','$name')"; 
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
echo 'alert("Upload image of width=700 and height=438")';
echo '</script>';
}


}
?>