<?php 
SESSION_START();
$id=$_SESSION["id"];
include("connect.php");
if(isset($_POST["submit"]))
{
 $date=$_POST["date"];

 $query="Update archery set date='$date' where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data)
   {
   header("location:archery.php");
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
 $day=$_POST["day"];
 $teer=$_POST["teer"];
 
$query="Update archery set day='$day', teer='$teer' where id=$id";
 $data=mysqli_query($conn,$query);
 if($data)
   {
    header("location:archery.php");
   }
   else
   {
    echo '<script language="javascript">';
    echo 'alert("Error Updating Value")';
    echo '</script>';
    }
}
?>
