<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM discover_india WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:discover_india.php');
}

?>