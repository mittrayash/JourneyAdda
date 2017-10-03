<?php
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
$city=$_POST["city"];
$about=$_POST["about"];
$package=$_POST["package"];
$package1=$_POST["package1"];
$package2=$_POST["package2"];
$package3=$_POST["package3"];
$package4=$_POST["package4"];
 
       $query=mysqli_query($conn, "select * from discover_india where id='$e_id'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
	$fileupload2 = $row['image'];


       if(!empty($_FILES["fileupload1"]["name"]))
	    {
	    $fileupload2 = $_FILES["fileupload1"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "images/";
	    $target_file = $target_dir1 . basename($_FILES["fileupload1"]["name"]);
	    $fileupload2=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["fileupload1"]["name"]);	    
	    $temp1 = explode(".", $_FILES["fileupload1"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['fileupload1']['tmp_name'], "images/".$a_file);
	    }
	    $query1="UPDATE discover_india SET image='$fileupload2',city_name='$city',about_city='$about',package1='$package',package2='$package1',package3='$package2',package4='$package3',package5='$package4' where id=$e_id";
$data=mysqli_query($conn,$query1);
if($data)
{
header("location:discover_india.php");
}
else
{
echo "error";
}

}
?>