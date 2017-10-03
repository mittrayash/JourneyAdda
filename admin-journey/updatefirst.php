<?php
SESSION_START();
$id=$_SESSION['id'];
include("connect.php");
if(isset($_POST["submit"]))
{
    $direct=$_POST["direct"];
    $house=$_POST["house"];
    $ending=$_POST["ending"];
    $query="UPDATE common_first set direct='$direct',house='$house',ending='$ending' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:first.php");
    }
}
if(isset($_POST["submit1"]))
{
    $date=$_POST["date"];
   
    $query="UPDATE common_date set date='$date' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:first.php");
    }
}
?>