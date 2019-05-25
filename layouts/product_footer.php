




   
    

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
<script type="text/javascript" src="js/myscripts.js"></script>

<script src="assets/js/owl.js"></script>
<script src="assets/js/masterslider.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.bxslider.min.js"></script>


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

<?php 

$database->close_connection();


?>