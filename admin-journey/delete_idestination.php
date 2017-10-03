<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM international_destination WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:international_destination.php');
}

?>