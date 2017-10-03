<?php 
SESSION_START();
$e_id=$_SESSION["e_id"];
include("connect.php");
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $data1=$_POST["data"];
    $query="Update testimonial set name='$name',data='$data1' where id='$e_id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:testimonial.php");
    }
    else
    {
        echo "Error updating values";
    }
}
?>