<?php 
include'header.php';
include("connect.php");
$query="select * from discover_country";
$data=mysqli_query($conn,$query);

?>


<div class="container text-center pt50 pb50 about" style="margin-top:6%;">
	  <h1>International Holidays</h1>
		<h3 style="color:#000;">Catchy statement<br>
Two lines preferably</h3>
</div>

<section style="background:#eee;">
<div class="container pt30 pb50">
	<div class="row">
		<div class="pt30">
			<ul style="list-style:none;padding:0;">
		        <?php 
		          while($row=mysqli_fetch_assoc($data))
		          {
		            $img='http://urjentupccodes.com/journeyadda/admin-journey/'.$row["image"];
		            $city=$row["country"];
		            $about_city=$row["about_country"];
		            $package1=$row["package1"];
		            $package2=$row["package2"];
		            $package3=$row["package3"];
		            $package4=$row["package4"];
		            $package5=$row["package5"];
		          
		        ?>
				<li class="col-md-4">
				    
					<div class="tour-img">
						<a href="international_package.php?country=<?php echo $city;?>">
							<figure class="rel overflow-hd">
								<img class="img-responsive" src="<?php echo $img;?>" alt="Alluring Rajasthan">
							</figure>
						</a>
						<div class="tour-data">
							<h3 ><?php echo $city;?></h3>
							<p><?php echo $about_city;?></p>
						</div>
						<div class="tour-list">
							<ul>
								<li><a href="pack-details.php?package=<?php echo $package1;?>"><?php echo $package1;?></a></li>
								<li><a href="pack-details.php?package=<?php echo $package2;?>"><?php echo $package2;?></a></li>
								<li><a href="pack-details.php?package=<?php echo $package3;?>"><?php echo $package3;?></a></li>
								<li><a href="pack-details.php?package=<?php echo $package4;?>"><?php echo $package4;?></a></li>
								<li><a href="pack-details.php?package=<?php echo $package5;?>"><?php echo $package5;?></a></li>
							</ul>
						</div>
					</div>
				</li>
				
				
				<?php }?>
				
			</ul>	
			
		</div>
	</div>

</div>	
</section>

<?php include'footer.php'; ?>