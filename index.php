<!DOCTYPE html>
	<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="">
		<meta charset="UTF-8">
		<title>Smarty</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/preloader.css">
		<link rel="stylesheet" href="css/image.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">

<script type="text/javascript">
function scroll_to_div(div_id)
{
 $('html,body').animate(
 {
  scrollTop: $("#"+div_id).offset().top-70
 },
 1000);
}
</script>
	<!--  -->

	</head>
	<body id="top">
		
    <!-- call Switcher -->
	<div id="color-switcher" class="closed">
		<div class="switcher-panel" style="left: 200.433px;">
			<i class="fa fa-phone faa-wrench animated fa-4x"></i>
		</div>
		<div class="switcher-header">
			<h3>TECHNOZER SOLUTION</h3>
			<hr style="margin: 0px;">
			<a href="tel:+917405557729" style="color: #444444; font-size: 17px;"><i class="fa fa-mobile fa-2x" aria-hidden="true" aria-hidden="true" style="padding: 5px;"></i>   +91 74055 57729</a>
		</div>
		<div class="switcher-content">
			<div class="list-color" style="text-align: center;">
				<a class="btn btn-read" href="tel:+917405557729">CALL NOW</a>
			</div>
		</div>
	</div>
	<!-- /.call Switcher -->


<!-- language php start -->		
	<?php
	session_start();
 	include('lang.php');
 	
 	if(!isset($_SESSION['check']))
 	{
 		if(!isset($_GET['lang']))
 		{
 			$select='en';
 		}
 		else
 		{
 			$select=$_GET['lang'];
 		}
 		$_SESSION['check']=$select;
 	}
 	else
 	{
 		if(isset($_GET['lang'])){
 			$_SESSION['check']=$_GET['lang'];
 		}
 		$select=$_SESSION['check'];
 	}
	?>

<!-- language php ends -->

        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#"><img src="img/logo2.png" height="40" width="164" alt="" style="margin-top: 6px;"></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#" onclick="scroll_to_div('top')"><?php echo $lang[$select]['Home'] ?></a></li>

                         <li><a href="#" onclick="scroll_to_div('features')"><?php echo $lang[$select]['Service'] ?></a></li>

                        <li><a href="#" onclick="scroll_to_div('download')"><?php echo $lang[$select]['Download'] ?></a></li>

                        <li><a href="#" onclick="scroll_to_div('pricing-table')"><?php echo $lang[$select]['Price'] ?></a></li>

                        <li><a href="#" onclick="scroll_to_div('contact-form')"><?php echo $lang[$select]['Contact'] ?></a></li>

                        

                        <li class="nav-item dropdown-submenu dropdown">
                        <a class="dropdown-item dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="en">
                            <?php echo $lang[$select]['language'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?lang=en" class="enbt">English</a></li>
                            <li><a href="index.php?lang=guj" class="jpbt">ગુજરાતી</a></li>
                            <li><a href="index.php?lang=hin" class="hibt">हिन्दी</a></li>
                        </ul>
                    </li>

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>

	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1 class="wow fadeInUp" style="font-weight: 400;text-align: center; margin-top: 80px; color: #22cb98; font-family:azoft-sans-bold;"><?php echo $lang[$select]['Manage Society Smartly'] ?><br><?php echo $lang[$select]['WITH SMARTY'] ?></h1>
						</div>
					</div>
				</div>
		</div>

		<section id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2><?php echo $lang[$select]['OUR BEST SERVICES'] ?></h2>
							<p><?php echo $lang[$select]['Easy society management and transparent society administration between member and manager.'] ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/Transactions.png" height="auto" width="50" alt="Transactions" title="Transactions"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Transactions'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Transaction Info'] ?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/Notice.png" height="auto" width="50" alt="Notice" title="Notice"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Notice'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Notice Info'] ?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/Collection.png" height="auto" width="50" alt="Collection" title="Collection"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Collection'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Collection Info'] ?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/Accets.png" height="auto" width="50" alt="Accets" title="Accets"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Assets'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Assets Info'] ?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/MEMBER.png" height="auto" width="50" alt="MEMBERS" title="MEMBERS"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Members'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Member Info'] ?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<a href="#"><img src="img/print.png" height="auto" width="50" alt="Print Report" title="Print Report"></a>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $lang[$select]['Print Report'] ?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s"><?php echo $lang[$select]['Print Report Info'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="download">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2><?php echo $lang[$select]['DOWNLOAD'] ?></h2>
						<p><?php echo $lang[$select]['Smarty is platform to manage society Easily and Transparently.'] ?>
						<br><?php echo $lang[$select]['Download Smarty from Google Play Store'] ?></p>
					</div>
				</div>
			</div>

			<!-- <div class="container">
				<div class="row">
						<div class="col-lg-6 offset-lg-6" style="margin: auto 0 !important; text-align: center;">
	                  	<img src="img/member_logo.png" class="img-fluid" alt="logo" style="float: none;">
	                    <h2 style="padding: 15px 0;">Smarty Member App</h2>
	                    <a href="https://itunes.apple.com/in/app/smarty-society-member/id1460226522?mt=8" class="btn btn-primary" style="padding: 10px 25px; margin-bottom: 30px; margin-right: 20px;"">
	                    <img src="img/appleicon.png"> App Store</a>

	                    <a href="https://play.google.com/store/apps/details?id=com.technozer.society.app.smarty.manager" class="btn btn-primary" style="padding: 10px 25px; margin-bottom: 30px;">
	                    <img src="img/playstore.png"> Play Store</a>

	              		 </div>

						<div class="col-lg-6 offset-lg-6" style="margin: auto 0 !important; text-align: center;">
	                  	<img src="img/manager_logo.png" class="img-fluid" alt="logo" style="float: none;">
	                    <h2 style="padding: 15px 0;">Smarty Manager App</h2>
	                    <a href="https://play.google.com/store/apps/details?id=com.technozer.society.app.smarty.manager" class="btn btn-primary" style="padding: 10px 25px; margin-bottom: 30px;">
	                    <img src="img/playstore.png"> DOWNLOAD</a>
	                </div>
				</div>
			</div> -->

			<div class="container">
				<div class="row">
						<div class="col-lg-6 offset-lg-6" style="margin: auto 0 !important; text-align: center; padding-bottom: 20px;">
		                  	<img src="img/member_logo.png" class="img-fluid" alt="logo" style="float: none;">
		                    <h2 style="padding: 15px 0;"><?php echo $lang[$select]['Smarty Member App'] ?></h2>

		                    <a href="https://itunes.apple.com/in/app/smarty-society-member/id1460226522?mt=8">
		                    <img src="img/app1.png" style="padding-right: 25px;"></a>

		                    <a href="https://play.google.com/store/apps/details?id=com.technozer.society.app.smarty.member">
		                    <img src="img/play1.png"></a>

	              		 </div>

						<div class="col-lg-6 offset-lg-6" style="margin: auto 0 !important; text-align: center;">
	                  	<img src="img/manager_logo.png" class="img-fluid" alt="logo" style="float: none;">
	                    <h2 style="padding: 15px 0;"><?php echo $lang[$select]['Smarty Manager App'] ?></h2>

	                    <a href="https://itunes.apple.com/in/app/smarty-society-manager/id1463272065">
		                    <img src="img/app1.png" style="padding-right: 25px;"></a>
		                    
	                    <a href="https://play.google.com/store/apps/details?id=com.technozer.society.app.smarty.manager">
	                    <img src="img/play1.png"></a>
	                </div>
				</div>
			</div>
		</section>
		
		<section id="pricing-table">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2><?php echo $lang[$select]['PRICING TABLE'] ?></h2>
						<h6 style="color: #fff;font-size: 21px;font-weight: 300; margin-bottom: 10px;"><?php echo $lang[$select]['Pricing Table Info'] ?></h6>
						<h1 style="color: #fff;"><?php echo $lang[$select]['50% OFF WELCOME OFFER'] ?></h1>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col">
						<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['1 MONTH FREE'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 300.00</del></p>
									<h1>&#8377; 00 <span style="font-size: 16px;">/<?php echo $lang[$select]['Month'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 50</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col">
						<div class="block text-center wow fadeInLeft" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['BASIC'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 1000.00</del></p>
									<h1>&#8377; 500 <span span style="font-size: 16px;">/<?php echo $lang[$select]['Year'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 20</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col">
						<div class="block text-center wow zoomIn" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['NORMAL'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 2000.00</del></p>
									<h1>&#8377; 1000 <span span style="font-size: 16px;">/<?php echo $lang[$select]['Year'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 50</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col" style="padding-top: 30px;">
						<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['STANDARD'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 3000.00</del></p>
									<h1>&#8377; 1500 <span span style="font-size: 16px;">/<?php echo $lang[$select]['Year'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 100</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col" style="padding-top: 30px;">
						<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['PREMIUM'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 4000.00</del></p>
									<h1>&#8377; 2000 <span span style="font-size: 16px;">/<?php echo $lang[$select]['Year'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 200</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col" style="padding-top: 30px;">
						<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
							<ul>
								<h2><?php echo $lang[$select]['GOLDEN'] ?></h2>
								<li>
									<hr>
									<p><del style="font-size: 25px;">&#8377; 6000.00</del></p>
									<h1>&#8377; 3000 <span span style="font-size: 16px;">/<?php echo $lang[$select]['Year'] ?></span></h1>
								</li>
								<li><h2 style="padding-top: 20px;"><?php echo $lang[$select]['MEMBER'] ?> <br>0 - 200+</h2></li>

								<li>
									<p>- <?php echo $lang[$select]['FREE TRIAL'] ?></p>
									<p>- <?php echo $lang[$select]['UNLIMITED SUPPORT'] ?></p>
									<p>- <?php echo $lang[$select]['SECURE DATA'] ?></p>
								</li>

							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2><?php echo $lang[$select]['CONTACT US'] ?></h2>
						<!-- <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p> -->
					</div>
					<div class="col-md-6 col">
						<!-- map -->
						<div class="map">
	                      <div id="googleMap">
	                      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.8137554396259!2d72.837900229208!3d21.221733599118373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fc1e728538f%3A0xf722221e5ba1f6e3!2sRJD+Business+Hub!5e0!3m2!1sen!2sin!4v1551696885354" width="100%" height="345px" frameborder="1" style="border:1" allowfullscreen></iframe>
	                      </div>

	                   </div><!--/map-->

					</div>

					<div class="col-md-6">
                            <!-- <h1 style="text-align: center; color: #22cb98; padding-bottom: 40px; text-decoration: underline;">Contact Us</h1> -->

                            <div class="col-md-4" style="text-align: center; padding: 0;">
                            <h2 style="text-decoration: underline; padding-bottom: 10px;"><?php echo $lang[$select]['Address'] ?></h2>
                            	<span>
								   <b><?php echo $lang[$select]['Technozer Solution'] ?></b><br><?php echo $lang[$select]['RJD Business Hub'] ?>,<br><?php echo $lang[$select]['Katargam'] ?>,<br><?php echo $lang[$select]['Surat'] ?>-395004,<br><?php echo $lang[$select]['INDIA'] ?>
								</span>
								<hr>
							</div>
							

							<div class="col-md-4" style="text-align: center; padding: 0;">
								<h2 style="text-decoration: underline; padding-bottom: 10px;"><?php echo $lang[$select]['Contact'] ?></h2>
								<a href="tel:+917405557729" style="color: #444444;"><i class="fa fa-phone" aria-hidden="true" aria-hidden="true" style="font-size:20px; padding: 10px;"></i>+91 74055 57729</a>
								<br>
								<a href="mailto:info@technozer.com" style="color: #444444;"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:20px; padding-right: 10px;"></i>info@technozer.com</a>
								
								<hr>
							</div>
							

							<div class="col-md-4" style="text-align: center; padding: 0;">
								<h2 style="text-decoration: underline; padding-bottom: 5px;"><?php echo $lang[$select]['Follow Us'] ?></h2>
								<a href="https://www.facebook.com/TechnozerSolution/?ref=py_c" style="color: #444444;"><i class="fa fa-facebook" aria-hidden="true" style="font-size:20px; padding: 10px;"></i><?php echo $lang[$select]['Facebook'] ?></a>
								<br>
								<!-- <a href="#" style="color: #444444;"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px; padding: 10px;"></i>Instagram</a> -->
								<hr>
							</div>
							
					</div>
				</div>
			</div>
		</section>
		<footer>
					<a href="#"><img src="img/logo_footer.png" alt=""></a>
					<div class="copyright" style="color: #fff;">
						Copyright &copy;2019 <a href="http://technozer.com">Technozer Solution</a>.
					</div>
		</footer>
	</div>
		<!-- load Js -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/html5lightbox.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.scrollUp.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>