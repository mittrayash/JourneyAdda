<?php
include("connect.php");
include("test.php");

$dbs=mysqli_connect('localhost','root','','urjentup_journey');
try {

        $stmt = $dbs->query('SELECT * FROM banner ORDER BY id DESC ');
        while($rows = $stmt ->fetch_assoc()) {
     	$tests[]=$rows;
      }	
      
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    $query="select * from package";
    $data=mysqli_query($conn,$query);
    $query1="Select * from blog";
    $row1=mysqli_query($conn,$query1);
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Journey Adda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
 
  <link href="css/bootstrapTheme.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
<!-- MY bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- ENDS here--->
    <link href="css/owl.theme.css" rel="stylesheet">
		<script src="js/modernizr.custom.17475.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	
	.img1{
	position: absolute;
    top: -230px;
    bottom: 0;
    left: 40px;
    right:0;
    height: 230px;
    width: 370px;
    z-index: 99;
    pointer-events:none;

	}
	
	.img2{
	position: absolute;
    top: -80px;
    bottom: 0;
    left: 150px;
    right:0;
    z-index: 999;
    pointer-events:none;
    width: 150px;
    height: 150px;
	}

    .primaryText{
        font-size: 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: large;
        color: #b3bbc6;
    }
	
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="index.php">
              <img src="images/journeylogo3.png" height="100" width="120" style="margin-top: -8%;margin-left: 0%;">
     </a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li> 
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
  </div>
   <div class="container-fluid" style="background:#efefef;">
	<div class="container">
	<div class=" col-md-8 col-md-offset-2">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav second-nav text-center">
			<li><a href="country_package.php">International Holidays</a></li>
			<li><a href="country.php">Discover India</a></li>
			<li><a href="#">Take a Break</a></li>
			<li><a href="#">Celebrate Love</a></li>
			<li><a href="#">Go Wild</a></li>
		  </ul>
		</div>
	  </div>
	</div>  
  </div>
</nav>
<div id="banner" class="carousel slide" data-ride="carousel" style="margin-top:6%;">
				<!-- Indicators -->
				
				<div class="carousel-inner">
				<?php $i = 1; ?>
          <?php foreach($tests as $res) { ?>
          <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
          
            <div class="<?php echo $item_class; ?> " >
				
					<div class="item active">						
						<img src="<?php echo 'admin-journey/'.$res["banner"]?>" alt="" style="background-position:center center;background-size: cover;width:100%;height:100%;"> 
					 
				    </div>

				    
</div>
 <?php $i++; ?>
            <?php } ?>
				</div>
			 <a class="left carousel-control" href="#banner" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#banner" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
			</div> <!--/#carousel-slider-->
		



<!-- Container (About Section) -->
<div id="" class="">
  <div class="row">
    <div class="col-md-4 slideanim">
					<div class="banner">
						<div class="rel img1 overflow-hd1 tier1" >
								<img class="img-responsive" id="myimg" src="images/adven2.jpg" alt="Alluring Rajasthan" style='border: solid 1px white ;'>
						</div>
						<div class="rel img2 overflow-hd1 base">
								<img class="img-responsive base img-circle" src="images/advenTop.jpg" alt="Alluring Rajasthan" style='border: solid 10px #222d32 ;'>
						</div>

					</div>
            <div class="row" id="asdasd" style="height: 200px; background-color: #434a54;">
                <div class="col-sm-12 base tier1"  style="left: 12%; width: 80%; height: 200px; background-color: rgb(67, 74, 84);">
                    <span class="primaryText"><center  style="margin-top: 95px;">Adventure Packages</center></span>
                </div>
                <div class="mouser col-sm-12" id="mouser1" style="  z-index: 10000; top: -283px; height: 85px; position: relative"></div>
            </div>
					
					
    </div>
    <div class="col-md-4 slideanim">
        <div class="">
                <div class="rel img1 overflow-hd1 tier2" id="asdasd">
                    <img class="img-responsive" src="images/luxury2.jpg" alt="Alluring Rajasthan" style='border: solid 1px white ;'>
                </div>
                <div class="rel img2 overflow-hd1">
                    <img class="img-responsive img-circle" src="images/luxuryTop.jpg" alt="Alluring Rajasthan" style='border: solid 10px #222d32 ;'>
                </div>


        </div>
        <div class="row" style="height: 200px; background-color: #434a54;">

            <div class="col-sm-12 base tier2" style="left: 9%; width: 80%; height: 200px; background-color: rgb(67, 74, 84);">
                <span class="primaryText"><center  style="margin-top: 95px;">Luxury Packages</center></span>
            </div>
            <div class="mouser col-sm-12" id="mouser2" style="  z-index: 10000; top: -283px; height: 85px; position: relative"></div>
        </div>

    </div>
    <div class="col-md-4 slideanim">
        <div class="">
                <div class="rel img1 overflow-hd1 tier3">
                    <img class="img-responsive" src="images/moon2.jpg" alt="Alluring Rajasthan" style='border: solid 1px white ;'>
                </div>
                <div class="rel img2 overflow-hd1">
                    <img class="img-responsive img-circle" src="images/moonTop.jpg" alt="Alluring Rajasthan" style='border: solid 10px #222d32 ;'>
                </div>



        </div>
        <div class="row" style="height: 200px; background-color: #434a54;">
            <div class="col-sm-12 base tier3" style="height: 200px; background-color: rgb(67, 74, 84); left: 9%; width: 80%;">
                <span class="primaryText"><center style="margin-top: 95px;">Honey Moon Packages</center></span>
            </div>
            <div class="mouser  col-sm-12" id="mouser3" style="  z-index: 10000; top: -283px; height: 85px; position: relative"></div>
        </div>

    </div>
  </div>


</div>



<br /><br /><br /><br />
<div class="container">
	<div class="text-center">
		<button class="btn btn-style ">Know What You Want ? Get a Quote Here</button>
	</div>
</div>

<div class="container-fluid bg-grey text-center pt50 pb50">
     <h2 class="pb20">HOW IT WORKS?</h2>
	    <div class="row slideanim">
			<div class="col-sm-4">
			  <i class="fa fa-globe logo-small fa-4x"></i>
			  <h4>Tell Us Know Where You Want To Go</h4>
			  <p>Denote simple fat denied add worthy little use. Instantly gentleman contained belonging exquisite.</p>
			</div>
			<div class="col-sm-4">
			
			  <span class="fa fa-suitcase logo-small fa-4x"></span>
			  <h4>We Will Create a Package To Suit Your Needs</h4>
			  <p>With my them if up many. Extremity so attending objection as engrossed gentleman something.</p>
			</div>
			<div class="col-sm-4">
			  <span class="fa fa-money logo-small fa-4x"></span>
			  <h4>Pay & Travel</h4>
			  <p>Old education him departure any arranging one prevailed. Behaved the comfort another fifteen eat.</p>
			</div>
	    </div>
      </div>
</div>

<!-- Container (Services Section) -->
<div  class="container-fluid text-center pt30 pb50">
  <h2>FEATURED PACKAGES / BEST DEALS</h2>
  

	<div class="row">
		<div class="col-md-12">
			<div id="owl-demo2" class="owl-carousel">
                    <?php
			       while($row=mysqli_fetch_assoc($data)){
			           $image='admin-journey/'.$row["image"];
			           $package_name=$row["package_name"];
			           $night=$row["night"];
			           $day=$row["day"];
			           $price=$row["price"];
			           $about=$row["about"];
			    ?>
				<div class="item col s12 m3 hvr-float-shadow wow fadeInLeft">
					<div class="pack-img">
						
							<figure class="rel overflow-hd1">
								<a href="pack-details.php?package=<?php echo $package_name;?>"><img class="img-responsive" src="<?php echo $image;?>" alt="Alluring Rajasthan"></a>
							</figure>
						
						<div class="pack-data">
							<h3 ><?php echo $package_name;?></h3>
							<div>
								<div class="col-md-6 pad-left">
									<h4><span><i class="fa fa-calendar"></i></span><?php echo $night;?>N / <?php echo $day;?>D</h4>
								</div>
								<div class="col-md-6">
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
				</div>
				
				<?php }?>
				
			
				
			
				
			</div>				
						
		</div>	
	</div>
</div>

<div  class="container-fluid text-center pt30 pb50" style="background:#f6f6f6;">
  <h2>DESTINATIONS -DISCOVER NEW</h2>
  
 
  <div class="row">
		<div class="col-md-12">
			<div id="owl-demo1" class="owl-carousel">
                    <?php 
                      $i_query="select * from discover_country";
                      $i_data=mysqli_query($conn,$i_query);
                      while($i_row=mysqli_fetch_assoc($i_data))
                      {
                          
                        $img='admin-journey/'.$i_row["image"];
                        $country=$i_row["country"];
                        $about=$i_row["about_country"];
                    ?>
				<div class="item col s12 m3 hvr-float-shadow wow fadeInLeft">
					<div class="pack-img">
						
							<figure class="rel overflow-hd1">
								<a href='international_package.php?country=<?php echo $country;?>'><img class="img-responsive" src="<?php echo $img;?>" alt="Alluring Rajasthan"></a>
							</figure>
						
						<div class="pack-data">
							<h3 ><?php echo $country;?></h3>
						</div>
						<div class="pack-desc col-md-12">
							<span class="clearfix color-777 pack-desc-span">
								<?php echo $about;?> 
							</span>
						</div>
					</div>
				</div>
				
			<?php }?>
			</div>				
						
		</div>	
	</div>
</div>

<div class="container text-center pt50 pb50">
     <h2 class="pb20">VISIT OUR BLOG !</h2>
	    <div class="row slideanim text-center">
			<ul id="carousel" class="elastislide-list col-md-4">
			    <?php
			        while($data1=mysqli_fetch_assoc($row1))
			         {
			             $background_image=$data1["background_image"];  
			             $image=$data1["image"];
			             $blog_data=$data1["blog_data"];
			             $blog_link=$data1["blog_link"];
			    ?>
					<li>
						<article class="blog-item" style="float: left; list-style: none; position: relative;">
							<div class="blog-img"> 
									<a href="" class="" target="_blank"> 
									<img src="<?php echo $background_image;?>" class="img-responsive">
									</a> 
								<div class="blog-desc"> 
									<div class="post-author" style="padding:70px 25px;"> 
										<span><img  title="Discover India" alt="Discover India" src="<?php echo $image;?>">
										</span>
										<p> 
											<a href="" class="" target="_blank"><?php echo $blog_data;?></a>
										</p>
							
										<div class="blog-extra">
								
											<a class="read-more " href="<?php echo $blog_link;?>" target="_blank">Read More</a>
										</div> 
									</div> 
								</div>
							</div>
						</article>
					</li>
					<?php }?>
			
				</ul>
	    </div>
    
</div>


<!-- Container (Testimonial Section) -->
<div class="container-fluid text-center bg-grey" style="padding-top:30px;padding-bottom:50px;margin-bottom:30px;"> 
  <h2>Testimonials</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
				<!-- Indicators -->
				
				<div class="carousel-inner">
				<?php $i = 1; ?>
          <?php foreach($test as $t) { ?>
          <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
          
            <div class="<?php echo $item_class; ?> " >
				
					<div class="item active">						
						<h4>"<?php echo $t["data"];?>"<br><span><?php echo $t["name"];?></span></h4>					 
				    </div>
				      
				    
</div>

 <?php $i++; ?>
            <?php } ?>
				</div>
			 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
			</div> <!--/#carousel-slider-->

  
<footer class="container-fluid" style="background:#343434;padding:40px 15px;">
	<h3 style="color:#fff;padding-bottom:10px;" class="text-left col-sm-12">Fill in your details for updates on amazing offers</h3>
	<form class="enquiry-form">
		<div class="form-group col-sm-3">
			<input type="text" class="form-control" placeholder="Name">
		</div>
		<div class="form-group col-sm-3">
			<input type="email" class="form-control" placeholder="Email">
		</div>
		<div class="col-sm-2">
			<input type="button" class="btn btn-success" value="submit" style="padding:12px 30px;border-radius:0px;font-size:18px;">
		</div>
		<div class="col-md-4">
			<p style="color:#fff;">We value your privacy. No spam either.</p>
		</div>
	</form>
	<div class="col-md-12">
		<div class="col-md-6" style="padding-left:0px;">
			<ul style="list-style:none;padding:0;color:#e5e5e5">
				<a href=""><li class="col-md-3" style="padding-left:0px;">Terms & Conditions</li></a>
			   	<a href="about.php"><li class="col-md-2" style="padding-left:0px;">About Us</li></a>
				<a href="contact.php"><li class="col-md-3" style="padding-left:0px;">Contact Us</li></a>
			</ul>
		</div>
		<div class="col-md-6 text-right social" style="padding-left:0px;">
			<ul style="list-style:none;padding:0;color:#e5e5e5">
				<li class="col-md-1 col-md-offset-9" ><a href=""><i class="fa fa-facebook"></i></a></li>
				<li class="col-md-1" ><a href=""><i class="fa fa-instagram"></i></a></li>
				<li class="col-md-1" ><a href=""><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-12" style="padding-top:20px;">
		<div class="col-md-6" style="padding-left:0px;">
			<h5 style="color:#e4e4e4;">&copyright; 2012 Journey Adda. All rights reserved.</h5>
		</div>
		<div class="col-md-6 text-right" style="padding-left:0px;">
			<h5 style="color:#e4e4e4;">A division of MAI E-Travel Services</h5>
		</div>
	</div>
</footer>

<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
   
	#owl-demo1 .item{
      display: block;
      margin: 15px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      text-align: center;
    }
	#owl-demo2 .item{
      display: block;
      margin: 10px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      text-align: center;
    }
    #owl-demo3 .item{
      display: block;
      margin: 10px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      text-align: center;
    }
    .owl-theme .owl-controls .owl-buttons div {
      padding: 6px 9px;
    }

    .owl-theme .owl-buttons i{
      margin-top: 0px;
    }
   #owl-demo4 .item{
      display: inline-block;
      margin: 15px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      text-align: center;
      height:100%;
    }
    /*To move navigation buttons outside use these settings:*/

    .owl-theme .owl-controls .owl-buttons div {
      position: absolute;
	  z-index:2;
    }

    
	.owl-theme .owl-controls .owl-buttons .owl-prev{
      left: -1%;
      top: 40%; 
    }

    .owl-theme .owl-controls .owl-buttons .owl-next{
      right:-1%;
      top: 40%;
    }
    </style>
<script>
    
	   $("#owl-demo1").owlCarousel({
        navigation:true,
		 items : 4,
		navigationText: [
      "<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
        afterInit : function(elem){
          var that = this
          that.owlControls.prependTo(elem)
        }
      });
	   $("#owl-demo2").owlCarousel({
        navigation:true,
		 items : 4,
		navigationText: [
      "<i class='icon-chevron-left icon-white'></i>",
      "<i class='icon-chevron-right icon-white'></i>"
      ],
        afterInit : function(elem){
          var that = this
          that.owlControls.prependTo(elem)
        }
      });

      
    </script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			$( '#carousel1' ).elastislide();
			
		</script>
		
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

    $(".base").parent().siblings('div').children('.img1').children('img').hide();

    $(".mouser").hover(function() {
        $(this).parent().siblings('div').children('.img1').children('img').fadeIn('slow');
    },function(){
        $(this).parent().siblings('div').children('.img1').children('img').fadeOut();
    });


        $(".base").hover(function(){
            //alert($(this).attr('id'));
            //alert($(this).parent().attr(id));
            //alert($(this).parent().siblings('div').children('img').attr('class'));
            $(this).parent().siblings('div').children('.img1').children('img').fadeIn('slow');
            $(this).css("background-color", "#f9fafc");



           // $('this').parent().siblings(".img1").children('img').css('display','block');


        }, function(){
            $(this).css("background-color", "#434a54");
            $(this).parent().siblings('div').children('.img1').children('img').fadeOut();
        });


}
)



</script>
    <div id="sda"></div>
</body>
</html>