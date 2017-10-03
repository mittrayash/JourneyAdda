<?php 
include("connect.php");

 if (isset($_POST["submit"])) {
 $to = "shubi@acefinity.com";
    

     $name = $_POST["name"];
   
     $mobile_no = $_POST["contact"];
   
     $email = $_POST["email"];
   

    $message = $_POST["message"];
   
  $subject='contactUs';

   $msg .= 'Hello Sir/Maam, '. "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'New User Contacts you,Details are mention below ' . "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'Name- '.$name . "\r\n";
   $msg .= 'Mobile no- '.$mobile_no . "\r\n";
   $msg .= 'Email- '.$email . "\r\n";
   $msg .= 'Message- ' .$message . "\r\n";
   $msg .= ' '. "\r\n";
  
   $msg .= 'Thanks & Regards '."\r\n";
     $headers = "From:Contact";
    if (mail($to,$subject , $msg,$headers)) {
      echo '<script language="javascript">';
      echo'alert("We Will contact You Soon!!")';
      echo '</script>';
    } else {
        echo '<script language="javascript">';
      echo'alert("Please Try Again!!")';
      echo '</script>';
    }

   
}

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
    <link href="css/owl.theme.css" rel="stylesheet">
		<script src="js/modernizr.custom.17475.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               	  <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function () {
            $(".numeric").bind("keypress", function (e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                $(".error").css("display", ret ? "none" : "inline");
                return ret;
            });
            $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
        });
    </script>
    
  <style>
  
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
      <a class="navbar-brand" href="index.php">Journey Adda</a>
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
			<li><a href="">International Holidays</a></li>
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
<div class="container-fluid text-center pt50 pb50 about" style="margin-top:5.5%;">
	<div class="col-md-9">
     <h1>CONTACT US</h1>
		<h4 style="color:#000;">Jot us a note and we will get back to you in a<br>
jiffy.</h4>
	   
	   <div class="col-md-12" style="padding-top:5%;">
		   <div class="col-md-8"><span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
		
				<form class="contact-form " action="contact.php" method="post" style="padding-top:25px;">
					<div class="form-group">
						<input type="text" placeholder="Name"  name="name" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" placeholder="Email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<input type="phone" maxlength="10" placeholder="Contact number" name="contact" class="form-control numeric">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message...." name="message" rows="4"></textarea>
					</div>
					<input type="submit" value="Submit" class="btn" name="submit">
				</form>
				<br>
			</div>
			<div class="col-md-4 con-det" style="padding:4% 0;">
				<div class="col-md-12">
					<h4>Email:</h4>
					<p>journeyadda@gmail.com<p>
				</div>
				<div class="col-md-12">
					<h4>Contact Number:</h4>
					<p>9897089898<br>01165786789<br>9867654536</p>
				</div>
				<div class="col-md-12">
					<h4>Social Links:</h4>
					<p>
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-instagram"></i>
					<p>
				</div>
			</div>
      </div>
	  
	  <div class="" style="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.24452639734!2d77.23441831467844!3d28.56241908244545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce24c76aff925%3A0x455a11bc612344cd!2sAceFinity+Infotech+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1496825902992" width="100%" height="435" frameborder="0" style="border:0;margin-top:4%;" allowfullscreen></iframe>
	  </div>
	  
	</div>  
	
	<div class="col-md-3" style="padding-right:0px;margin-top:20%;">
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		<div class="blockDeal set cg-offerlist_mscss cg-offerlistmsc_0">
			<a href="" target="_blank" class="full">
				<div class="p5">
					<p class="txt-cap fs16">amritsar Holiday Packages</p>	
					<div class="clearfix mb5 fs14">
											Starting from <span class="price fs18"><span class="rs">Rs.</span>&nbsp;12,500</span>
						<div class="am fr txt-right">
							<ul class="fac-list" style="list-style:none;padding:0;">
								<li><i class="fa fa-cutlery"></i></li>
								<li><i class="fa fa-plane"></i></li>
								<li><i class="fa fa-bed"></i></li>
								<li><i class="fa fa-car"></i></li>
								<li><i class="fa fa-binoculars"></i></li>
							</ul>
						</div>
							<p class="txt-upper cA4A19A">3 Nights, 4 Days</p>
					</div>
				</div>
				<p class="fl txt-center w100 perPerson">RATE PER PERSON ON TWIN SHARING</p>
			</a>
		</div>
		
		
		
	</div>
	
</div>


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
			<h5 style="color:#e4e4e4;">&cpoyright; 2012 Journey Adda. All rights reserved.</h5>
		</div>
		<div class="col-md-6 text-right" style="padding-left:0px;">
			<h5 style="color:#e4e4e4;">A division of MAI E-Travel Services</h5>
		</div>
	</div>
</footer>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		
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

})
</script>

</body>
</html>