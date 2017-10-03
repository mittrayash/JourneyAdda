<?php 
include'header.php';
include("connect.php");
$city=$_GET["city"];
$country=$_GET["country"];

$query="select * from international_package where country='$country'";
$data=mysqli_query($conn,$query);


?>

<section class="banner-bg" >
	<div class="container text-center pt50 pb50 about" style="margin-top:6%;">
	    <?php 
	    if($country)
	    {
	    ?>
	    <h1><?php echo $country;?></h1><?php } else { ?>
		  <h1><?php echo $city;?></h1><?php }?>
			<h3 style="color:#000;">Catchy statement<br>
	Two lines preferably</h3>
	</div>
</section>

<section style="background:#eee;">
<div class="container pt30 pb50">
	<div class="row">
		<div class="pt30">
			<ul style="list-style:none;padding:0;">
			      <?php 
		            while($row=mysqli_fetch_assoc($data))
		            {   
		                $image='admin-journey/'.$row["image"];
		                $package_name=$row["package_name"];
		                $night=$row["night"];
		                $day=$row["day"];
		                $price=$row["price"];
		                $about=$row["about"];
		            
		           ?>
		       <a href="international_pack-details.php?package=<?php echo $package_name;?>">
		         
				<li class="col-md-4">
					<div class="pack-img">
						
							<figure class="rel overflow-hd">
								<img class="img-responsive" src="<?php echo $image;?>" alt="Alluring Rajasthan">
							</figure>
						
						<div class="pack-data">
							<h3 ><?php echo $package_name;?></h3>
							<div>
								<div class="col-md-6 pad-left">
									<h4><span><i class="fa fa-calendar"></i></span><?php echo $night;?>N / <?php echo $day;?>D</h4>
								</div>
								<div class="col-md-6 text-right" style="padding-right:0px;">
									<h4><span><i class="fa fa-rupee"></i></span><?php echo $price;?></h4>
								</div>
							</div>
						</div>
						<div class="pack-desc col-md-12">
							<span class="clearfix color-777 pack-desc-span">
							    <?php echo $about;?>
							</span>
						</div>
					</div>
				</li>
				</a><?php } ?>
				
			</ul>	
			
		</div>
	</div>

</div>
</section>	
<?php include'footer.php'; ?>