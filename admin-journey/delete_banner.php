<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM banner WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:banner.php');
}

?>