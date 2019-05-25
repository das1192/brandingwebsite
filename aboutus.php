<?php
require_once("includes/initialize.php");
$Hbannerid =10;
$Hbanners= find_images_by_category_id($Hbannerid);
$Hprincipalid =11;
$Hprincipals = find_images_by_category_id($Hprincipalid);
$image_folder = "product_images";

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
 <!--  <div class="preloader"></div> -->
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
					<a href="home.html">
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
			<div class="section-title title"><h2>WELCOME TO <span>TECNOTRON</span></h2></div>
			<div><p>TECNOTRON is a specialized IT Security Solutions Provider company, that provides End-To-End Innovative Technology Service by Domestic Sales, Installations, and High Quality After Sales Service in all over Bangladesh. We’re growing faster and with our valued Customer satisfaction since its inception in the Year 2012.
The Company is running successfully with our dedicated and highly experienced Board of Directors, Our Management Team and of courses, our dedicated Technical Team's Hard work, Efficiency, Honesty, and Sincerity. Our Experience, Knowledge, and Innovative idea in this IT Security Solution Industry is to ensure that we will satisfy you the highest customer expectations with the best solution to your Home and Business. Our team strength and Focused after-sales service can help customers to find the right solutions at the right price. 
The Company is self-solvency by its own glorious work. We respect the entire our client's requirements to a memorable satisfaction.</p></div>
			</div>


			<div class="cause-title">
			<div class="section-title title"><h2>OUR <span>VISION</span></h2></div>
			<div><p>To be a leading IT Security Solutions provider company in all over the country, that should be recognized for customer's satisfaction through excellent after sales service. We will distribute door to door IT Security Solutions that Connect, Satisfy, and Secure people’s lives.</p></div>
			</div>
			<div class="cause-title">
			<div class="section-title title"><h2>OUR <span>MISSION</span></h2></div>
			<div><p>We will add value by choosing the advanced Products and innovative Solutions while delivering high-quality service, advice, and expertise for all of our customers.</p></div>
			</div>



		</div>


</section>


<!--Client section Start -->

    <section class="our-sponsors section-padding text-center" style="background-color: #FFF;" id="clients">
      <div class="container">
      	
          <div class="section-title title"><h2><span>OUR KEY CLIENTS</span></h2></div>
        
        <ul class="sponsors-slider">
          
                            <?php 

                            while ($banner=$database->fetch_array($Hbanners)) {
                                
                             $logo =  "<li><figure><img src=\"{$image_folder}/{$banner['filename']}\" alt=\"{$banner['filename']}\"></figure></li> ";

                                echo $logo;
                            }
                            ?> 


                    
        </ul>
      </div>
    </section>
    <!-- our-clients section end -->

   

<!--Client Principals Start -->
<section class="our-sponsors section-padding text-center" style="background-color: #FFF;" id="clients">
      <div class="container">
        
          <div class="section-title title"><h2><span>OUR CORE BRAND</span></h2></div>
        
        <ul class="sponsors-slider">
                        <?php 

                            while ($principal=$database->fetch_array($Hprincipals)) {
                                
                             $logo =  "<li><figure><img src=\"{$image_folder}/{$principal['filename']}\" alt=\"{$principal['filename']}\" ></figure></li> ";

                                echo $logo;
                            }
                            ?> 

                    
        </ul>
      </div>
    </section>
    <!-- our-principals section end -->











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


<!-- <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/jquery.countTo.js"></script> -->
<!-- <script src="assets/js/isotope.js"></script> -->
<!-- <script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/jquery.fancybox-media.js"></script> -->
<!-- <script type="text/javascript" src="assets/js/jquery.polyglot.language.switcher.js"></script> -->
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/masterslider.js"></script>
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
