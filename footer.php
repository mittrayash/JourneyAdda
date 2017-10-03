<?php 
include("connect.php");
 if (isset($_POST["submit1"])) {
 $to = "shubi@acefinity.com";
    

     $name = $_POST["name"];
   
     $email = $_POST["email"];
   

  
  $subject='Enquiry';

   $msg .= 'Hello Sir/Maam, '. "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'New User Contacts you,Details are mention below ' . "\r\n";
   $msg .= ' '. "\r\n";
   $msg .= 'Name- '.$name . "\r\n";
  
   $msg .= 'Email- '.$email . "\r\n";
   
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
<footer class="container-fluid" style="background:#343434;padding:40px 15px;">
	<h3 style="color:#fff;padding-bottom:10px;" class="text-left col-sm-12">Fill in your details for updates on amazing offers</h3>
	<form class="enquiry-form" action="footer.php" method="post">
		<div class="form-group col-sm-3">
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="form-group col-sm-3">
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="col-sm-2">
			<input type="submit" class="btn btn-success"  name="submit" value="submit" style="padding:12px 30px;border-radius:0px;font-size:18px;">
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
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
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

})
</script>

</body>
</html>