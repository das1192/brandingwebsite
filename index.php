<?php
// created by Shiba Das
// shiba.chandro.das@gmail.com
// +8801767039396
require_once("includes/initialize.php");
//banner id 10
$Hbannerid =10;
$Hbanners= find_images_by_category_id($Hbannerid);
//principal/clients id 11
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
 <link href="assets/css/responsive.css" rel="stylesheet">


</head>
<body>
 <div class="page-wrapper">
  <!-- .preloader -->
<!--   <div class="preloader"></div> -->
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
		<div class="row">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="logo"  style="padding: 0px;">
					<a href="index.php">
						<img src="tecnotronlogo.jpg" alt="logo" height ="50" width="280"></a>
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

									<li class="dropdown"><a href="aboutus.php">About Us</a>
										<ul>

											<li><a href="aboutus.php">Our Mission</a></li>
											<li><a href="aboutus.php">Our Vision</a></li>

										</ul>
									</li>

									<li class="dropdown"><a href="#products">Our Products</a>
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
									<li class="dropdown"><a href="#services">Our Services</a>
										<ul>
											<li><a href="#">Project Planning and Evaluation</a></li>
											<li><a href="#">Supply and Installation</a></li>
											<li><a href="#">Old CCTV Camera System Upgrade</a></li>
											<li><a href="#">Customer Training </a></li>

										</ul>
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

<!--Sticky Header-->
<div class="sticky-header">
  <div class="container-fluid clearfix">
   <div class="row">
    <div class="col-md-2 col-sm-12 col-xs-12">
     <div class="logo" style="padding: 0px;" >
      <a href="home.html"><img src="logo" alt="" width="80"></a>
    </div>
  </div>
  <div class="col-md-10 col-sm-12 col-xs-12">
   <div class="menu-bar">
    <nav class="main-menu">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
   <div class="collapse navbar-collapse" id="navbar-collapse1">
								<ul class="navigation ">
									<li class="current"><a href="index.php">Home</a>
									</li>
									<li class="dropdown"><a href="aboutus.php">About Us</a>
										<ul>

											<li><a href="aboutus.php">Our Mission</a></li>
											<li><a href="aboutus.php">Our Vision</a></li>

										</ul>
									</li>

									<li class="dropdown"><a href="#products">Our Products</a>
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
									<li class="dropdown"><a href="#services">Our Services</a>
										<ul>
											<li><a href="#">Project Planning and Evaluation</a></li>
											<li><a href="#">Supply and Installation</a></li>
											<li><a href="#">Old CCTV Camera System Upgrade</a></li>
											<li><a href="#">Customer Training </a></li>

										</ul>
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
</header>
<!--End Sticky Header-->



  <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideEasing: $Jease$.$OutQuint,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:450px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:450px;overflow:hidden;">
            <div data-p="218.75">
                <img data-u="image" src="slider/01.jpg" />
                <div u="thumb">Communication Devices</div>
            </div>
            <div data-p="218.75">
                <img data-u="image" src="slider/02.jpg" />
                <div u="thumb">CCTVS</div>
            </div>
            <div data-p="218.75">
                <img data-u="image" src="slider/03.jpg" />
                <div u="thumb">PBAX</div>
            </div>
            <div data-p="218.75">
                <img data-u="image" src="slider/04.jpg" />
                <div u="thumb">Video Door Devices</div>
            </div>
          
        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:1300px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:1300px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

<!-- ABOUT US section -->
<section class="our-cause section-padding text-center" id="aboutus">
	<div class="container">
		<div class="cause-title">
			<div class="section-title title"><h2>WELCOME TO <span>TECNOTRON</span></h2></div>
			<div><p>TECNOTRON is a specialized IT Security Solutions Provider company, that provides End-To-End Innovative Technology Service by Domestic Sales, Installations, and High Quality After Sales Service in all over Bangladesh. We’re growing faster and with our valued Customer satisfaction since its inception in the Year 2012.
The Company is running successfully with our dedicated and highly experienced Board of Directors, Our Management Team and of courses, our dedicated Technical Team's Hard work, Efficiency, Honesty, and Sincerity. Our Experience, Knowledge, and Innovative idea in this IT Security Solution Industry is to ensure that we will satisfy you the highest customer expectations with the best solution to your Home and Business. Our team strength and Focused after-sales service can help customers to find the right solutions at the right price. 
The Company is self-solvency by its own glorious work. We respect the entire our client's requirements to a memorable satisfaction.</p></div>
			</div>
		</div>
	</section>

<!-- Product section -->	
<section class="our-cause section-padding text-center" id="products">
  <div class="container">

    <div class="cause-title">
      <div class="section-title title" ><h2>OUR  <span>PRODUCTS</span></h2>
      </div>
    </div>

		<div class="row btmgap">

				<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
					<div class="single-item" style="position: relative;">
						<div class="img-holder">
							<figure><img src="category-photo/homepage/cctv.jpg" alt="cctv"></figure>
							<div class="overlay"></div>
						</div>
						<div class="cause-content">
							<h4>CCTV Camera Solution</h4>
							<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
							</div>
						</div>
						<a href="cctv.php"  class="btn-one  readmore"  target="_blank">Read More</a >
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
					<div class="single-item" style="position: relative;">
						<div class="img-holder">
							<figure><img src="category-photo/homepage/access.jpg" alt="access.jpg"></figure>
							<div class="overlay"></div>
						</div>
						<div class="cause-content">
							<h4>Access Control &amp; Attendance</h4>
							<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
							</div>
						</div>
						<a href="access.php"  class="btn-one readmore" target="_blank">Read More</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
					 <div class="single-item" style="position: relative;">
							<div class="img-holder">
								<figure><img src="category-photo/homepage/public.jpg" alt="public.jpg"></figure>
								<div class="overlay"></div>
							</div>
							<div class="cause-content">
								<h4>PA &amp; Conference System</h4>
								<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
								</div>
							</div>
							<a href="pa.php"  class="btn-one readmore" target="_blank">Read More</a >
					</div>
				</div>

          </div> <!-- END First row -->

          <div class="row btmgap" >

          	<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
          		<div class="single-item" style="position: relative;">
          			<div class="img-holder">  
          				<figure><img src="category-photo/homepage/pabx.jpg" alt="pabx.jpg"></figure>
          				<div class="overlay"></div>
          			</div>
          			<div class="cause-content">
          				<h4>PABX and IP PABX</h4>
          				<div class="text"><p></p>
          				</div>
          			</div>
          			<a href="pabx.php"  class="btn-one readmore"  target="_blank">Read More</a >
          		</div>
          	</div>

          	<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
          		<div class="single-item" style="position: relative;">
          			<div class="img-holder">
          				<figure><img src="category-photo/homepage/computernetwork.jpg" alt="computernetwork.jpg"></figure>
          				<div class="overlay"></div>
          			</div>
          			<div class="cause-content">
          				<h4>Computer &amp; Networking System</h4>
          				<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
          				</div>
          			</div>
          				<a href="cnet.php"  class="btn-one readmore" target="_blank">Read More</a>
          		</div>
          	</div>

      			<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
      				<div class="single-item" style="position: relative;">
      					<div class="img-holder">
      						<figure><img src="category-photo/homepage/firecontrol.jpg" alt="fire.jpg"></figure>
      						<div class="overlay"></div>
      					</div>
      					<div class="cause-content">
      						<h4>Fire Fighting and Control</h4>
      						<div class="text"><p>dgfjhgfjhfjhfjhfhnfhjfjhfhf</p>
      						</div>
      					</div>
      					<a href="fire.php"  class="btn-one readmore"  target="_blank">Read More</a>
      				</div>
      			</div>



          </div> <!-- END 2nd row -->

          <div class="row " >
        
          	<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
          		<div class="single-item" style="position: relative;">
          			<div class="img-holder">
          				<figure><img src="category-photo/homepage/videodoor.jpg" alt="videodoor.jpg"></figure>
          				<div class="overlay"></div>
          			</div>
          			<div class="cause-content">
          				<h4>Video Door &amp; Home Automation </h4>
          				<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
          				</div>
          			</div>
          			<a href="video.php"  class="btn-one readmore"  target="_blank">Read More</a >
          		</div>
          	</div>

      	 <div class="col-md-4 col-sm-6 col-xs-12 flex-col">
      			<div class="single-item" style="position: relative;">
      				<div class="img-holder">
      					<figure><img src="category-photo/homepage/tonner.jpg" alt="tonner.jpg"></figure>
      					<div class="overlay"></div>
      				</div>
      				<div class="cause-content">
      					<h4>Printer Toner and Cartridge</h4>
      					<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
      					</div>
      				</div>
      				<a href="toner.php"  class="btn-one readmore" target="_blank">Read More</a >
      			</div>
      	  </div>


      			<div class="col-md-4 col-sm-6 col-xs-12 flex-col">
      				<div class="single-item" style="position: relative;">
      					<div class="img-holder">
      						<figure><img src="category-photo/homepage/idcard.jpg" alt="idcard.jpg"></figure>
      						<div class="overlay"></div>
      					</div>
      					<div class="cause-content">
      						<h4>ID card Printing</h4>
      						<div class="text"><p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh</p>
      						</div>
      					</div>
      					<a href="idcard.php"  class="btn-one readmore"  target="_blank">Read More</a >
      			     </div>
      			 </div>

        
      </div>  <!-- END 3rd row -->

   </div> <!-- end container -->
 </section> <!--OUR Product section end -->





<!--OUR SERVICES section START -->
<section class="our-cause section-padding text-center" id="services">
  <div class="container">
    <div class="cause-title">
      <div class="section-title title"><h2>OUR  <span>Services</span></h2></div>
     
    </div>

    <div class="row">
            
          <div class="col-md-4 col-lg-4 border">
            <i class="ion-compose icon-big"></i>
            <h3>Project Planning and Evaluation</h3>
                <p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh </p>
            </div>
            <div class="col-md-4 col-lg-4 border">
            <i class="ion-settings icon-big"></i>
            <h3>Supply and Installation</h3>
                <p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh </p> 
            </div>
            <div class="col-md-4 col-lg-4 border">
              <i class="ion-android-sync icon-big"></i>
              <h3>Old CCTV Camera System Upgrade</h3>
                  <p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh </p>
            </div>
            

          </div>
        
          

            <div class="row">
            
          <div class="col-md-6 col-lg-6 ">

            <i class="ion-wrench icon-big"></i> 
            <h3>Maintenance and Service Agreement</h3>
                <p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh </p>
            </div>
            <div class=" col-lg-6 ">
            <i class="ion-android-walk icon-big"></i>
            <h3>Customer Training </h3> 
                <p>We have the lergest collections of CCTVs in Bangladesh with the chipest price and served more than 1000+ coustomers in whole Bangladesh </p>
            </div>
            
          </div>

<hr>
              <div class="row ">

                <div class="col-md-6 col-lg-6">
                <i class="ion-android-globe icon-big"></i>
                <h3>OUR Coverage Sector </h3>
                  <ul class="list-group whyus">
                    <li class="list-group-item">1. Garments and Industry Sector</li>
                    <li class="list-group-item">2. Construction and Real Estate Sector</li>
                    <li class="list-group-item">3. Information Technology &Commercial Sector</li>
                    <li class="list-group-item">4. Bank and Financial Companies</li>
                    <li class="list-group-item">5. Club and Foreign Organization</li>
                    <li class="list-group-item">6. Hotel and Restaurant </li>
                    <li class="list-group-item">7. Educational Institute </li>
                    <li class="list-group-item">8. NGO and Govt. Organization</li>
                  </ul>

                </div>
            
              
              
                <div class="col-md-6 col-lg-6">
                <i class="ion-help-circled icon-big"></i>
                <h3>Why TECNOTRON </h3>
                  <ul class="list-group whyus">
                    <li class="list-group-item">1. We are highly technical</li>
                    <li class="list-group-item">2. We are friendly, fast and knowledgeable</li>
                    <li class="list-group-item">3. We deal with our clients honestly </li>
                    <li class="list-group-item">4. We build long-term relationships</li>
                    <li class="list-group-item">5. We are 100% quality focused</li>
                    <li class="list-group-item">6. We Provide support on weekend even public holiday.</li>
                    <li class="list-group-item">7. We do not believe in hidden cost</li>
                    <li class="list-group-item">8. We are big on communication</li>
                  </ul>
                </div>
              </div>

</section><!--OUR SERVICES section end -->




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
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

<!-- <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/jquery.countTo.js"></script> -->
<script src="assets/js/isotope.js"></script>
<!-- <script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/jquery.fancybox-media.js"></script> -->
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
