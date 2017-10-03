<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM destination WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:destination.php');
}

?>