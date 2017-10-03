<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM international_package WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: discover_country_package.php');
}


?>