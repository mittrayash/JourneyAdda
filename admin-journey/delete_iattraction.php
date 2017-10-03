<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM international_attractions WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:international_attractions.php');
}


?>