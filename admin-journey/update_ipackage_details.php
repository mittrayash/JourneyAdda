<?php
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
$place1=$_POST["place"];
$experience1=$_POST["experience"];
$experience2=$_POST["experience1"];
$experience3=$_POST["experience2"];
$experience4=$_POST["experience3"];
$experience5=$_POST["experience4"];
$name=$_POST["name"];


    $query=mysqli_query($conn, "select * from international_package_details where id='$e_id'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
	$fileupload2 = $row['image1'];
    $fileupload3=$row["image2"];
	$fileupload4=$row["image3"];

       if(!empty($_FILES["fileupload4"]["name"]))
	    {
	    $fileupload2 = $_FILES["fileupload4"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "images/";
	    $target_file = $target_dir1 . basename($_FILES["fileupload4"]["name"]);
	    $fileupload2=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["fileupload4"]["name"]);	    
	    $temp1 = explode(".", $_FILES["fileupload4"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['fileupload4']['tmp_name'], "images/".$a_file);
	    }
	    if(!empty($_FILES["fileupload5"]["name"]))
	    {
	    $fileupload3 = $_FILES["fileupload5"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "images/";
	    $target_file = $target_dir1 . basename($_FILES["fileupload5"]["name"]);
	    $fileupload3=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["fileupload5"]["name"]);	    
	    $temp1 = explode(".", $_FILES["fileupload5"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['fileupload5']['tmp_name'], "images/".$a_file);
	    }
		 if(!empty($_FILES["fileupload6"]["name"]))
	    {
	    $fileupload4 = $_FILES["fileupload6"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "images/";
	    $target_file = $target_dir1 . basename($_FILES["fileupload6"]["name"]);
	    $fileupload4=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["fileupload6"]["name"]);	    
	    $temp1 = explode(".", $_FILES["fileupload6"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['fileupload6']['tmp_name'], "images/".$a_file);
	    }
 $sql="UPDATE international_package_details SET image1='$fileupload2',image2='$fileupload3',image3='$fileupload4',place1='$place1',experience1='$experience1',experience2='$experience2',experience3='$experience3',experience4='$experience4',experience5='$experience5',package_name='$name' where id='$e_id'";
$data=mysqli_query($conn,$sql);
if($row)
{
header("location:international_package_details.php");
}
else
{
echo "error";
}

}

?>