<?php 
include'header.php';
include("connect.php");
$package=$_GET["package"];
$query="select * from package_details where package_name='$package'";
$row=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($row);
$image1='admin-journey/'.$data["image1"];
$image2='admin-journey/'.$data["image2"];
$image3='admin-journey/'.$data["image3"];
$place1=$data["place1"];
$experience1=$data["experience1"];
$experience2=$data["experience2"];
$experience3=$data["experience3"];
$experience4=$data["experience4"];
$experience5=$data["experience5"];
$query1="select * from package where package_name='$package'";
$row1=mysqli_query($conn,$query1);
$data1=mysqli_fetch_assoc($row1);
$price=$data1["price"];
$query2="select * from itinerary where package_name='$package'";
$row2=mysqli_query($conn,$query2);
$data2=mysqli_fetch_assoc($row2);
$img1='admin-journey/'.$data2["image1"];
$img2='admin-journey/'.$data2["image2"];
$img3='admin-journey/'.$data2["image3"];
$detail1=$data2["detail1"];
$detail2=$data2["detail2"];
$detail3=$data2["detail3"];
$query3="select * from attractions where package_name='$package'";
$row3=mysqli_query($conn,$query3);
$data3=mysqli_fetch_assoc($row3);
$images1='admin-journey/'.$data3["image1"];
$images2='admin-journey/'.$data3["image2"];
$images3='admin-journey/'.$data3["image3"];
$details1=$data3["detail1"];
$details2=$data3["detail2"];
$details3=$data3["detail3"];
$query4="select * from inclusions where package_name='$package'";
$row4=mysqli_query($conn,$query4);
$data4=mysqli_fetch_assoc($row4);
$Image1='admin-journey/'.$data4["image1"];
$Image2='admin-journey/'.$data4["image2"];
$Image3='admin-journey/'.$data4["image3"];
$Detail1=$data4["detail1"];
$Detail2=$data4["detail2"];
$Detail3=$data4["detail3"];
$query5="select * from destination where package_name='$package'";
$row5=mysqli_query($conn,$query5);
$data5=mysqli_fetch_assoc($row5);
$Images1='admin-journey/'.$data5["image1"];
$Images2='admin-journey/'.$data5["image2"];
$Images3='admin-journey/'.$data5["image3"];
$Details1=$data5["detail1"];
$Details2=$data5["detail2"];
$Details3=$data5["detail3"];
$p_query="select * from package where package_name='$package'";
$p_row=mysqli_query($conn,$p_query);
$p_data=mysqli_fetch_assoc($p_row);
$p_images='admin-journey/'.$p_data["image"];
$p_package='admin-journey/'.$p_data["package_name"];
$p_day='admin-journey/'.$data5["day"];
$p_night=$data5["night"];
$p_price=$data5["price"];
$p_about=$data5["about"];

?>
<section class="banner-bg" >
	<div class="container text-center pt50 pb50 about" style="margin-top:6%;">
		  <h1><?php echo $package;?></h1>
			<h3 style="color:#000;">Catchy statement<br>
	Two lines preferably</h3>
	</div>
</section>

<section style="">
	<div class="container pt30 pb30">
		<div class="col-md-12 no-padding"  style="background:#eee;">
			<div class="col-md-5 no-padding">
				<div id="banner" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators" style="bottom:-10px;">
							<li data-target="#banner" data-slide-to="0" class="active"></li>
							<li data-target="#banner" data-slide-to="1"></li>
							<li data-target="#banner" data-slide-to="2"></li>
							<li data-target="#banner" data-slide-to="3"></li>
							<li data-target="#banner" data-slide-to="4"></li>
							<li data-target="#banner" data-slide-to="5"></li>
						</ol>

						<!-- Wrapper for slides -->
					<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo $image1;?>" alt="Los Angeles">
							</div>
							<div class="item">
								<img src="<?php echo $image2;?>" alt="">
							</div>
							<div class="item">
								<img src="<?php echo $image3;?>" alt="Chicago">
							</div>
						</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="place-det">
					<h4><?php echo $place1;?></h4>
				</div>
				<div class="col-md-12 no-padding">
					<div class="text-right col-md-3 pack-det pull-right no-padding">
						<div>
							<p style="margin-bottom:0px;">Starting From<p>
							<h4 style="margin-top:-13px;"><span><i class="fa fa-rupee"></i></span><?php echo $price;?></h4>
						</div>
						<br>
						
						
						<a href="booking.php" style="text-decoration:none;">
						<div class="request-quote">
							Request a Quote!
						</div>
						</a>
					</div>
					<div class="col-md-9 no-padding">
						<h5>This Holiday, Experience new:</h5>
						<div class="tour-list">
							<ul style="padding:15px;">
							<?php if(!$experience1==''){?>
							<li><?php echo $experience1;?></li><?php }?>
							<?php if(!$experience2==''){?>
							<li><?php echo $experience2;?></li><?php }?>
							<?php if(!$experience3==''){?>
							<li><?php echo $experience3;?></li><?php }?>
							<?php if(!$experience4==''){?>
							<li><?php echo $experience4;?></li><?php }?>
							<?php if(!$experience5==''){?>
							<li><?php echo $experience5;?></li><?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
			
	</div>	
	
	<div class="container pb50">
		<div class="col-md-12 no-padding">
			<div class="">
				<div>
				<ul class="nav nav-tabs">
					<li class="active no-padding"><a data-toggle="tab" href="#itinerary">Itinerary</a></li>
					<li class="no-padding"><a data-toggle="tab" href="#attraction">Attractions</a></li>
					<li class="no-padding"><a data-toggle="tab" href="#inclusion">Inclusions/Exclusions</a></li>
					<li class="no-padding"><a data-toggle="tab" href="#destination">Destination Info</a></li>
				</ul>
				</div>
				
				  <div class="tab-content">
					<div id="itinerary" class="tab-pane fade in active">
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $img1;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $detail1;?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $img2;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
								<?php echo $detail2;?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $img3;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $detail3;?>		</span>
							</div>	
						</div>
					</div>
					<div id="attraction" class="tab-pane fade">
					  <div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $images1;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $details1;?>
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $images2;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
								<?php echo $details2;?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $images3;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $details3;?> 
								</span>
							</div>	
						</div>
					</div>
					<div id="inclusion" class="tab-pane fade">
					  <div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Image1;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $Detail1?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Image2;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo Detail2;?>
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Image3;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
								<?php echo $Detail3;?>
								</span>
							</div>	
						</div>
					</div>
						<div id="destination" class="tab-pane fade">
					  <div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Images1?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							<?php echo $Details1;?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Images2;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
								 <?php echo $Details2;?> 
								</span>
							</div>	
						</div>
						<div class="col-md-12 no-padding">
							<div class="col-md-2 no-padding">	
								<figure class="rel overflow-hd">
									<img class="img-responsive" src="<?php echo $Images3;?>" alt="Alluring Rajasthan">
								</figure>
							</div>
							<div class="col-md-10">
								<span class="clearfix color-777 pack-desc-span">
							   <?php echo $Details3;?>
							   			</span>
							</div>	
						</div>
					</div>
					
				  </div>
			</div>  
		</div>
	</div>
	
</section>

<section style="background:#eee;">
<div class="container pt50 pb50">
	<div class="row">
		<h3 class="col-md-12" style="font-weight:700;">Other packages that may interest you</h3>
			<ul style="list-style:none;padding:0;">
		 <?php 
$other="select * from package where status=1";
$pack=mysqli_query($conn,$other);
while($package=mysqli_fetch_assoc($pack))
{
$oimage='admin-journey/'.$package["image"];
$opackage_name=$$package["package_name"];
$onight=$package["night"];
$oday=$package["day"];
$oprice=$package["price"];
$oabout=$package["about"];
?>
				<li class="col-md-4">
					<div class="pack-img">
						<a href="">
							<figure class="rel overflow-hd">
								<img class="img-responsive" src="<?php echo $oimage;?>" alt="Alluring Rajasthan">
							</figure>
						</a>
						<div class="pack-data">
							<h3 ><?php echo $opackage;?></h3>
							<div>
								<div class="col-md-6 pad-left">
									<h4><span><i class="fa fa-calendar"></i></span><?php echo $onight?>N /<?php echo $oday;?>D</h4>
								</div>
								<div class="col-md-6">
									<h4><span><i class="fa fa-rupee"></i></span><?php echo $oprice;?></h4>
								</div>
							</div>
						</div>
						<div class="pack-desc col-md-12">
							<span class="clearfix color-777 pack-desc-span">
								<?php echo $oabout;?> 
							</span>
						</div>
					</div>
				</li>
				
			
				<?php }?>
			</ul>	
			
	
	</div>

</div>
</section>

    <style>

        .nav-tabs{
            padding-top: -100px;
        }
        .nav-tabs > li{
            background-color: #F5F5F5;
            border-right: 1px transparent;
            margin-right:2px;
        }
        .nav-tabs > li.active{
            border-top: 3px orangered solid;
            border-radius: 7px;
        }
        .nav-tabs > li.active > a:focus{
            color: orangered;
            font-weight:bold;
        }
        .nav-tabs > li.active > a{
            color: orangered;

        }
        .nav-tabs > li > a
        {
            /* adjust padding for height*/
            padding-top: 4px;
            padding-bottom: 4px;
        }
    </style>
<?php include'footer.php'; ?>