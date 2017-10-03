<?php

include("connect.php");

 $id  = $_GET["id"];

 $sql = "DELETE FROM previous_results WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: index_details.php');
}

?>