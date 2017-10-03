<?php

include("connect.php");

 $id  = $_GET["d_id"];

 $sql = "DELETE FROM inclusions WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location:inclusion.php');
}


?>