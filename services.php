<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Carwash Website Template | Services :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800|Comfortaa:700' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Comfortaa:700,300,400' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>
	<style>
		body {
			font-size: 15px;
			font-family: Arial;
		}
	
		a {
			/* color: #999; */
		}
	
		.redColor {
			color: #C40000 !important;
		}
	
		nav.top {
			background-color: white;
			padding-top: 5px;
			padding-bottom: 5px;
			border-bottom: 1px solid #e7e7e7;
		}
	
		nav.top span,
		nav.top a {
			/* color: #999; */
			margin: 0px 10px 0px 10px;
		}
	
		nav.top a:hover {
			color: #C40000;
		}
	</style>
	<body>
		<!-- container -->
		<!-- header -->
		<div class="header">
			<div class="container">
				<!-- logo -->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="carwash" /></a>
				</div>
				<!-- /logo -->
				<!-- top-nav -->
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
					<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<?php
								// if the user is not logged in, show login/register
								session_start();
								error_reporting( error_reporting() & ~E_NOTICE );
								if($_SESSION["user"]==null){
									?><li><a href="login.html">Login/Register</li></a><?php
								} else{
									// if the user has logged in show name and dropdown menu
									?>
										<li class="dropdown"><a href="#" class="dropbtn">Welcome, <?php echo $_SESSION["user"]['fname'] ?></a>
										<div class="dropdown-content">
										<a href="#">Profiles</a>
      									<a href="#">Booking</a>
      									<a href="phpsrc/userLogOut.php">Log Out</a>
										</div>
										</li>
									<?php
								}
							 ?>
						<!-- <li><a href="contact.html">Contact</a></li> -->
						<div class="clearfix"> </div>
					</ul>
				</div>
				<!-- /top-nav -->
				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(1000);
						});
					});
				</script>
				<!-- script-for-nav -->
				<div class="clearfix"> </div>
			</div>
			<!-- /header -->
		</div>
					<!-- Services -->
					<div class="services">
						<div class="container">
							<div class="services-grids">
								<div class="col-md-9 services-left">
									<h1>Our services</h1>
									<div class="services-left-grids">
										<div class="col-md-6 services-left-grid">
											<h3>Service Name</h3>
											<p>Aenean iaculis, tortor sit amet molestie fringilla, sapien elit interdum mauris, sed cursus dui felis nec nisi. Nam vitae efficitur erat</p>
											<a class="more-btn" href="#">More</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Service Name</h3>
											<p>Aenean iaculis, tortor sit amet molestie fringilla, sapien elit interdum mauris, sed cursus dui felis nec nisi. Nam vitae efficitur erat</p>
											<a class="more-btn" href="#">More</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Service Name</h3>
											<p>Aenean iaculis, tortor sit amet molestie fringilla, sapien elit interdum mauris, sed cursus dui felis nec nisi. Nam vitae efficitur erat</p>
											<a class="more-btn" href="#">More</a>
										</div>
										
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!-- Services -->
							<!-- team-grids-caption -->
							<div class="team-grids-caption" style="display: none;">
								<div class="container">
									<div class="team-grids-caption-left">
										<h4>He point of using Lorem Ipsum is that</h4>
										<p>as opposed to using Many desktop publishing packages and web page editors now use </p>
									</div>
									<div class="team-grids-caption-right">
										<a class="team-btn" href="#">ReadMore</a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<!-- team-grids-caption -->
							<!-- /team-grids -->
						</div>
					</div>
					<!-- /team -->
					<!-- footer -->
					<div class="footer">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3">
									<div class="footer-grid">
											<h5>About US</h5>
											<p>We are a professional and efficient car wash team.</p>
											<p> Welcome to book our service online.	</p>
									</div>
								</div>
								<div class="col-md-3" style="display: none;">
									<div class="footer-grid f-blog">
										<h5>Form the Blog</h5>
										<div class="f-blog-artical">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<span>March 20,2014</span>
										</div>
										<div class="f-blog-artical f-blog-artical1">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<span>March 20,2014</span>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="footer-grid site-map">
										<h5>Site Map</h5>
										<ul>
											<li><a href="index.php"><span> </span>Home</a></li>
											<li><a href="about.html"><span> </span>About</a></li>
											<li><a href="services.html"><span> </span>Services</a></li>
											<li><a href=""><span> </span>Booking</a></li>
											<!-- <li><a href="contact.html"><span> </span>Contact</a></li> -->
										</ul>
									</div>
								</div>
								<div class="col-md-3">
									<div class="footer-grid f-gallery" >
										<h5>Gallery</h5>
										<div class="f-gallery-grids">
											<div class="f-gallery-grid">
												<ul>
													<li><a href="#"><img src="images/people-pic.jpg" title="name" /></a></li>
													<li><a href="#"><img src="images/people-pic1.jpg" title="name" /></a></li>
													<li><a href="#"><img src="images/people-pic4.jpg" title="name" /></a></li>
													<li><a href="#"><img src="images/people-pic3.jpg" title="name" /></a></li>
													<li><a href="#"><img src="images/people-pic4.jpg" title="name" /></a></li>
													<li><a href="#"><img src="images/people-pic1.jpg" title="name" /></a></li>
													<div class="clearfix"> 
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!-- /footer -->
					<!-- footer-bottom -->
					<div class="footer-bottom">
						<div class="container">
							<div class="footer-bottom-left">
								<p>Design by<a href="http://w3layouts.com/">W3layouts</a></p>
							</div>
							<div class="footer-bottom-right">
								<ul>
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!-- footer-bottom -->
		</div>
		<!-- /container -->
	</body>
</html>
