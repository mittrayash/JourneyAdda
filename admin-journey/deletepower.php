<?php

include("connect.php");

 $id  = $_GET["id"];

 $sql = "DELETE FROM power WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: power.php');
}
$Id  = $_GET["Id"];

 $sql = "DELETE FROM power_date WHERE id = '".$Id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: power.php');
}

?>