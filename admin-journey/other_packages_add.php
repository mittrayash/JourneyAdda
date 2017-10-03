<?php 
include("connect.php");
$oid=$_GET["e_id"];
if($_GET["e_id"])
{
  
 $query2="update package set status=1 where id='$oid'";
  $data2=mysqli_query($conn,$query2);
  if($data2)
  {
  header("location:other_packages.php");
  }
  
}
$did=$_GET["d_id"];
if($_GET["d_id"])
{
  
 $query2="update package set status=0 where id='$did'";
  $data2=mysqli_query($conn,$query2);
  if($data2)
  {
  header("location:other_packages.php");
  }
  
}
?>