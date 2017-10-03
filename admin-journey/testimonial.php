<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 

$limit=8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);
$query="select * from testimonial ORDER BY id ASC LIMIT $start_from, $limit";
$data=mysqli_query($conn,$query);
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $data=$_POST["data"];
    $query1="INSERT INTO testimonial values('','$name','$data')";
    $data=mysqli_query($conn,$query1);
    if($data)
    {
        echo '<script language="javascript">';
        echo 'alert("Value Inserted")';
        echo '</script>';
    }
    else
    {
       echo '<script language="javascript">';
        echo 'alert("Error Inserting values")';
        echo '</script>'; 
    }
}


?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
          <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <!--  <li class="active">Dashboard</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
              <!-- small box -->
           
            <div class="col-md-12 member">
              <div class="form-group pb20 col-md-4"><h3 style="margin-left:6%;">Insert Testimonial</h3></div>
<div class="col-md-12">
               <form name="image" action="testimonial.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-4">
              <input type="text" class="form-control" name="name" placeholder="Enter name." required>
                 </div>
                
                 <div class="form-group col-md-4">
              <input type="text" class="form-control" name="data" placeholder="Enter data/about" required>
                 </div>
                
                 <div class="form-group col-md-2" style="text-align:center;"><input type="submit" class="btn btn-info" value="Submit" name="submit" ></div>
                </form>
                </div>
       </div>
       <h2 style="text-align:center;margin-top:6%;margin-bottom:2%;">Edit Testimonials</h2>
       <table class="table table-striped table-bordered text-center table-responsive">
         <thead>
            <tr>
             <th class="text-center col-md-2">Name</th>
			 <th class="text-center col-md-1">Data</th>
			
             <th class="text-center col-md-1">Action</th>
             </tr>
         </theah>
<?php 
$query1="select * from testimonial";
$data1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_assoc($data1))
{
$id=$row1["id"];
$name=$row1["name"];
$data=$row1["data"];

?>
         <tbody>
            <tr>
              
			  <td class="text-center col-md-2"><?php echo $name;?></td>
			  
              <td class="text-center col-md-2"><?php echo $data;?></td>
                                  <td class=" form-group text-center col-md-1">
              <a href="edit_testimonial.php?e_id=<?php echo $id;?>"><button class="btn btn-info" style="margin-bottom:4px;">Edit</button></a>
<a href="delete_testimonial.php?d_id=<?php echo $id?>"><button  class="btn btn-danger">Delete</button></a>
</td>
           </tr>
           
         </tbody>
<?php }?>
       </table>
       </div>
       </div>
       <div class="text-center">
       <?php  
$sql = "SELECT COUNT(id) FROM testimonial";  
$data = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($data);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='testimonial.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
      
      </div>
      
      
      </div>
      
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <style>
           .table-bordered {
    border: 1px solid #000;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>td{
	border:1px solid #000;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'testimonial.php?page='
    });
	});
	</script>
 <?php include("includes/footer.php"); ?>  

 
  
