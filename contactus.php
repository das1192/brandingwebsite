<?php
		use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);    



	if (isset($_POST['submitmsg'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$topicno = $_POST['topic'];
		if($topicno==1){
			$topic ="Sales Enquiry";
		}
		elseif ($topicno==2) {
			$topic = "Dealer/Re-Seller";
		}
		else{

			$topic ="Support";
		}
		$subject = $_POST['subject'];
		$subject = $topic."-".$subject;
		$msg = $_POST['message'];
		

		try {
    //Server settings
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
     
       $mail->SMTPSecure = 'tls';      
                                  // Set mailer to use SMTP
      $mail->Host = gethostbyname('tls://smtp.gmail.com:587');  // Specify main and backup SMTP servers
      $mail->Port = 587;    
      $mail->SMTPKeepAlive = true;  
     // $mail->Mailer = "tls"; 


                                // Enable SMTP authentication
    $mail->Username = 'cherylhughey09@gmail.com';                 // SMTP username
    $mail->Password = 'cherylhughey1122';                           // SMTP password
    $mail->isSMTP();                     // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;                            // TCP port to connect to

    $mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);


    //Recipients 
    $mail->setFrom("{$email}", "{$name}");
   $mail->addAddress('amirul@tecnotronbd.com', 'Amirul');  
     // $mail->addAddress('shiba@mmservices.com.bd', 'Amirul');    // Add a recipient
  //  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo("{$email}", "{$name}");
    $mail->addCC('shiba.chandro.das@gmail.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
  // $mail->addAttachment("{$path}");         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;


      $message = "<table><tr><td>FROM  : ".$name."</td></tr>"; 
      $message .="<tr><td>Email   : ".$email."</td></tr>";  
      $message .="<tr><td>Subject : ".$subject." </td>"; 
      $message .="<tr><td>Message : ".$msg." </td>"; 
      $message .= "<tr><td><strong>THIS EMAIL HAS BEEN SENT VIA WEBFROM </strong></td></tr></table>";
      $mail->Body    = $message;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
     
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}










		
	}
	elseif (isset($_POST['submitcv'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];

		$tmp_file = $_FILES['cv_upload']['tmp_name'];
		$target_file = basename($_FILES['cv_upload']['name']);
		$upload_dir = "upload";
		move_uploaded_file($tmp_file,$upload_dir."/".$target_file);
		$path = $upload_dir."/".$target_file;

		//unlink($upload_dir."/".$target_file);

		try {
    //Server settings
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
     
       $mail->SMTPSecure = 'tls';      
                                  // Set mailer to use SMTP
      $mail->Host = gethostbyname('tls://smtp.gmail.com:587');  // Specify main and backup SMTP servers
      $mail->Port = 587;    
      $mail->SMTPKeepAlive = true;  
     // $mail->Mailer = "tls"; 


                                // Enable SMTP authentication
    $mail->Username = 'cherylhughey09@gmail.com';                 // SMTP username
    $mail->Password = 'cherylhughey1122';                           // SMTP password
    $mail->isSMTP();                     // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;                            // TCP port to connect to

    $mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);


    //Recipients
    $mail->setFrom("{$email}", "{$name}");
  $mail->addAddress('amirul@tecnotronbd.com', 'Amirul');  
  //  $mail->addAddress('shiba@mmservices.com.bd', 'Amirul');    // Add a recipient
  //  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo("{$email}", "{$name}");
    $mail->addCC('realfireking@gmail.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   $mail->addAttachment("{$path}");         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CV';


      $message = "<table><tr><td>FROM  : ".$name."</td></tr>"; 
      $message .="<tr><td>Email : ".$email."</td></tr>";  
      $message .="<tr><td>TOPIC : CV </td>"; 
      $message .= "<tr><td><strong>THIS EMAIL HAS BEEN SENT VIA WEBFROM WITH ATTACHEMENT </strong></td></tr></table>";
      $mail->Body    = $message;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    unlink($upload_dir."/".$target_file);
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}












	}


else{



}







?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>Tecnotron</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 <meta name="keywords" content="" />



 <!--Favicon-->
 <link rel="shortcut icon" href="assets/images/" type="image/x-icon">
 <link rel="icon" href="assets/images/" type="image/x-icon">


 
 <link href="assets/css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

 <link href="assets/css/style.css" rel="stylesheet">
 <link href="css/contactus.css" rel="stylesheet">
 <link href="assets/css/responsive.css" rel="stylesheet">


</head>
<body>
 <div class="page-wrapper">
  <!-- .preloader -->
  <div class="preloader"></div>
  <!-- /.preloader -->


<!-- main header area -->
<header class="main-header">
	<div class="header-upper">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<ul class="top-left">
						<li><i class="fa fa-phone"></i>Call Us : 01837 222 444 </li>
						<li><i class="fa fa-envelope"></i>Email :  info@tecnotronbd.com</li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top-right clearfix">

						<ul class="social-link">
							<li>Follow Us : </li>
							<li><a href="https://www.facebook.com/tecnotronbd/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/TecnotronBD"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div> 
				</div>
			</div>               
		</div>
	</div>


<div class="header-lower">
	<div class="container-fluid clearfix">
		<div class="row ">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="logo"  style="padding: 0px;">
					<a href="home.php">
						<img src="" alt="logo" width="80"></a>
					</div>
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="menu-bar">
						<nav class="main-menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse1">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="navbar-collapse1">
								<ul class="navigation ">
									<li class="current"><a href="index.php">Home</a>
									</li>
									<li><a href="aboutus.php">About Us</a>

									</li>

									<li class="dropdown"><a href="#">Our Products</a>
										<ul>
											<li><a href="cctv.php">CCTV Camera Solution</a></li>
											<li><a href="access.php">Access Control and Attendance System</a></li>
											<li><a href="pa.php">Public Allowance and Conference System</a></li>
											<li><a href="pabx.php">PABX and IP PABX</a></li>
											<li><a href="cnet.php">Computer and Networking Accessories</a></li>
											<li><a href="fire.php">Fire Fighting and Control</a></li>
											<li><a href="video.php">Video Door Phone and Home Automation </a></li>
											<li><a href="toner.php">Printer Toner and Cartridge</a></li>
											<li><a href="idcard.php">ID card Printing</a></li>
										</ul>
									</li>
								
									</li>
									<li><a href="#clients">Our Clients</a></li>
									
									
									<li><a href="contactus.php">Contact US</a></li>
								</ul>
							</div>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>




<!-- ABOUT US section -->
<section class="our-cause section-padding text-center" id="aboutus">
	<div class="container">
		<div class="cause-title">
			<div class="section-title title"><h2>Contact <span>US</span></h2></div>
			</div>
		</div>
	</section>


<section class="contactusform container">

	<div class="row">
 <div class="col-md-1"></div>

		<div class="col-md-5">
		<h2>Have Any Query?</h2>
			<form action="contactus.php"  method="POST">


				<div class="form-group">
					<label for="exampleFormControlInput1">Name </label>
					<input type="text" class="form-control" required="true" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" name="email" required="true" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Topic</label>
					<select class="form-control" name="topic" required="true">
						<option value="1">Sales Enquiry</option>
						<option value="2">Become a Dealer/Re Seller</option>
						<option value="3">Support</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Subject </label>
					<input type="text" class="form-control" name="subject"  required="true" placeholder="Subject">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Message </label>
					<textarea class="form-control" name="message" required="true" rows="3"></textarea>
				</div>


				<button type="submit" name="submitmsg" class="btn btn-lg btn-primary">Send</button>
			</form>


		</div>

		<div class="col-md-1"></div>

		<div class="col-md-4">

			<h2>CARIEER: Send Your CV </h2>


			<form action="contactus.php" enctype="multipart/form-data" method="POST">

				<div class="form-group">
					<label for="exampleFormControlInput1">Name </label>
					<input type="text" name="name" class="form-control form-control-sm" required="true" placeholder="Name">
				</div>

				<div class="form-group">

					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" name="email" class="form-control form-control-sm" required="true" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Select file </label>
					<input type="file" class="form-control-file" name="cv_upload" required="true" accept=".doc,.docx,.pdf">
				</div>



				<button type="submit" name="submitcv" class="btn btn-primary">Send</button>



			</form>




<div class="col-md-1"></div>



		</div>


	</div>
	
			
</section>




    

    <!-- main foorer area -->
    <section id="contactus">
    <footer class="main-footer-area">
    	<div class="container">
    		<div class="footer-top-area">
    			<ul class="footer-socila">
    				<li><h4>Connect With Us:</h4></li>
    				<li><a href="https://www.facebook.com/tecnotronbd/" target="_blank"><i class="fa fa-facebook"></i></a></li>
    				<li><a href="https://twitter.com/TecnotronBD"><i class="fa fa-twitter"></i></a></li>
    				<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
    				<li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
    				<li><a href="javascript:void(0)"><i class="fa fa-vimeo"></i></a></li>
    			</ul>
    			<div class="footer-subscribe">
    				<form method="post" action="contactus.php">
    					<div class="form-group">
    						<button type="submit" class="btn-one">Write to us</button>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div class="main-footer">
    			<div class="row">

    				<div class="footer-column col-md-4 col-sm-6 col-xs-12">
    					<div class="link-widget">
    					<h4>Quick Links</h4>
    						<ul class="list">
    							<li><a href="aboutus.php">About Us</a></li>
    							<li><a href="contactus">Contact Us</a></li>

    						</ul>
    					</div>
    				</div>
    				<div class="footer-colmun col-md-4 col-sm-6 col-xs-12">
    					<div class="link-widget">
    						<h4>Services</h4>
    						<ul class="list">
    							<li><a href="#">Project Planning and Evaluation</a></li>
    							<li><a href="#">Supply and Installation</a></li>
    							<li><a href="#">Old CCTV Camera System Upgrade</a></li>
    							<li><a href="#">Maintenance and Service Agreement</a></li>
    							<li><a href="#">Customer Training</a> </li>
    						</ul>
    					</div>

    				</div>
    				<div class="footer-colmun col-md-4 col-sm-6 col-xs-12">
    					<div class="contact-widget">
    						<h4>contact us</h4>
    						<div class="text"><p>56, Lake Cricus (1st Floor),
    							West Panthapath </p></div>
    							<div class="single-item">
    								<div class="icon-box"><i class="fa fa-home" aria-hidden="true"></i></div>
    								<div class="text">Kalabagan,
    									Dhaka-1205, Bangladesh.</div>
    								</div>
    								<div class="single-item">
    									<div class="icon-box"><i class="fa fa-phone"></i></div>
    									<div class="text"> +8801851 111 777</div>
    								</div>
    								<div class="single-item">
    									<div class="icon-box"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
    									<div class="mail"><a href="#">info@tecnotronbd.com</a></div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="footer-bottom text-center">
    					<div class="text"><p>Copyright © <a href="#">Tecnotron</a> 2018. All Rights Reserved</p></div>
    				</div>
    			</div>
    		</footer>
    	</section>	
<!-- main footer area end -->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>
</div>



<!-- jQuery js -->

<script type="text/javascript" src="assets/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/jquery.fancybox-media.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/masterslider.js"></script>
<script type="text/javascript" src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/wow.js"></script>      
<script type="text/javascript" src="assets/js/theme.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>

<script src="assets/js/jquery.popupoverlay.js"></script>

<script src="assets/js/script.js"></script>


			<script type="text/javascript">
				$(document).on('click', 'a[href^="#"]', function (event) {
					event.preventDefault();

					$('html, body').animate({
						scrollTop: $($.attr(this, 'href')).offset().top
					}, 500);
				});
			</script>


</body>


</html>
