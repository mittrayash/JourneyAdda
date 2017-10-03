<?php
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
$data=$_POST["data"];
$link=$_POST["link"];



    $query=mysqli_query($conn, "select * from blog where id='$e_id'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
	$fileupload2 = $row['background_image'];
    $fileupload3=$row["image"];
	

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
		
 $sql="UPDATE blog SET background_image='$fileupload2',image='$fileupload3',blog_data='$data',blog_link='$link' where id='$e_id'";
$data=mysqli_query($conn,$sql);
if($row)
{
header("location:blog.php");
}
else
{
echo "error";
}

}

?>