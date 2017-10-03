<?php
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
$about1=$_POST["about1"];
$about2=$_POST["about2"];
$about3=$_POST["about3"];

$name=$_POST["package"];


    $query=mysqli_query($conn, "select * from attractions where id='$e_id'")or die(mysqli_error());
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
$sql="UPDATE attractions SET image1='$fileupload2',image2='$fileupload3',image3='$fileupload4',detail1='$about1',detail2='$about2',detail3='$about3',package_name='$name' where id='$e_id'";
$data=mysqli_query($conn,$sql);
if($row)
{
 header("location:attractions.php");
}
else
{
echo "error";
}

}

?>