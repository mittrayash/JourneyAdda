<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM discover_country WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: discover_package.php');
}


?>