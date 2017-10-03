<?php 
SESSION_START();
$id=$_SESSION["id"];
include("connect.php");
if(isset($_POST["submit"]))
{
 $date=$_POST["date"];

 $query="Update previous_results set date='$date' where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data)
   {
   header("location:previous_result.php");
   }
   else
   {
    echo '<script language="javascript">';
    echo 'alert("Error Updating Value")';
    echo '</script>';
    }
}
if(isset($_POST["submit1"]))
{
 $fr=$_POST["fr"];
 $sr=$_POST["sr"];
 $fr_number=$_POST["fr_number"];
 $sr_number=$_POST["sr_number"];
 $query="Update previous_results set fr_number=$fr_number, sr_number=$sr_number where id=$id";
 $data=mysqli_query($conn,$query);
 if($data)
   {
    header("location:previous_result.php");
   }
   else
   {
    echo '<script language="javascript">';
    echo 'alert("Error Updating Value")';
    echo '</script>';
    }
}
?>
