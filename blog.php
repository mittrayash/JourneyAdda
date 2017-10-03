<?php 
include'header.php';
include("connect.php");
$query="Select * from blog";
$row=mysqli_query($conn,$query);

?>

<div class="container text-center pt50 pb50 about" style="margin-top:6%;">
     <h1>BLOG</h1>
		<h4 style="color:#000;">Write motto here or something interesting<br>
Two lines preferably</h4>

	<div class="row">
		<div class="pt30">
			
			<?php 
			  while($data=mysqli_fetch_assoc($row))
			  {
			    $background_image=$data["background_image"];  
			    $image=$data["image"];
			    $blog_data=$data["blog_data"];
			    $blog_link=$data["blog_link"];
			  
			?>
			<article class="blog-item col-md-4" style="float: left; list-style: none; position: relative;">
				<div class="blog-img"> 
						<a href="" class="" target="_blank"> 
						<img src="<?php echo $background_image;?>" class="img-responsive">
						</a> 
					<div class="blog-desc"> 
						<div class="post-author"> 
							<span><img  title="Discover India" alt="Discover India" src="<?php echo $image;?>">
							</span>
							<p> 
								<a href="" class="" target="_blank"><?php echo $blog_data;?></a>
							</p>
				
							<div class="blog-extra">
					
								<a  href="<?php echo $blog_link;?>" class="read-more " href="" target="_blank">Read More</a>
							</div> 
						</div> 
					</div>
				</div>
			</article><?php }?>
		
		</div>
	</div>

</div>	
<?php include'footer.php'; ?>