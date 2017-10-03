

<?php

include("connect.php");

 $id  = $_GET["id"];

 $sql = "DELETE FROM shoot WHERE id = '".$id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: shoot.php');
}
$Id  = $_GET["Id"];

 $sql = "DELETE FROM shoot_date WHERE id = '".$Id."'";

 $result = mysqli_query($conn,$sql);
if($result)
{
 header('Location: shoot.php');
}

?>