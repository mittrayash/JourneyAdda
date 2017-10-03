<?php 
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
    $e_id=$_POST["id"];
    $package=$_POST["package"];
    $day=$_POST["day"];
    $night=$_POST["night"];
    $price=$_POST["price"];
    $about=$_POST["about"];
 $city=$_POST["city"];
       $query=mysqli_query($conn, "select * from package where id='$e_id'")or die(mysqli_error());
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
	    $query2="UPDATE package SET image='$fileupload2',package_name='$package',day='$day',night='$night',price='$price',about='$about',city='$city' where id=$e_id";
        $data2=mysqli_query($conn,$query2);
        if($data2)
           {
              header("location:package.php");
            }
         else
          {
              echo "Error updating value";
          }

}


?>