<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM international WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:discover_country.php');
}


?>