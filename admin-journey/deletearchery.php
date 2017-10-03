<?php

include("connect.php");

 $id  = $_GET["id"];

 $sql = "DELETE FROM archery WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: archery.php');
}


?>