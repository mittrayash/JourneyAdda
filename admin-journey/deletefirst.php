<?php

include("connect.php");

 $id  = $_GET["id"];

 $sql = "DELETE FROM common_first WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: first.php');
}
$Id  = $_GET["Id"];

 $sql = "DELETE FROM common_date WHERE id = '".$Id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: first.php');
}

?>