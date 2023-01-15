<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="UTF-8">
	<title>PitchnTrack - Video booking</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/img/#.png">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="home" class="page-program">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
		<div id="cube-loader">
			<div class="caption">
				<div class="cube-loader">
					<div class="cube loader-1"></div>
					<div class="cube loader-2"></div>
					<div class="cube loader-4"></div>
					<div class="cube loader-3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	<header class="header">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="top-panel">
			<div class="container">
				<div class="header-left">
					<ul class="header-cont">
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+2349035375815">+234 903 537 5815 </a></li>
						<li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Sat: 8:00AM - 7:00PM | Sun: Closed</li>
					</ul>
				</div>
				<div class="header-right">
					<form class="search-form">
						<input type="search" class="search-form__field" placeholder="Search" value="" name="s">
						<button type="submit" class="search-form__submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
					<ul class="social-list">
						<li><a target="_blank" href="https://www.facebook.com/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
				<div class="header-logo">
					<a href="index.php" class="logo"><img src="assets/img/#.svg" alt="logo"><h3>Pitch<em>N</em>Track</h3></a>
				</div>
				<nav class="nav-menu">
					<ul class="nav-list">
						<li class="dropdown">
							<a href="index.php">Home </a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li class="dropdown">
							<a href="#">Partnership program <i class="fa fa-caret-down"></i></a>
							<ul>
								<li class="menu-active"><a href="Photography.php">Photography</a></li>
								<li><a href="Videography.php">Videography</a></li>
							</ul>
						</li>
						<li><a href="blog.php">News</a></li>
						<li><a href="contacts.php">Contacts</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- =============== HEADER END =============== -->
	
	<!-- ================ S-CONTACTS ================ -->
	<section class="s-contacts" style="background-color: #ffffff;">
		<div class="container">
			<h2 class="title-decor">Contact <span>Us</span> on video coverage...</h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-md-5 col-lg-4">
					<div class="contact-item">
						<div class="contact-item-left">
							<img src="assets/img/icon-1.svg" alt="img">
							<h4>need help</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li><a href="tel:+2349035375815">+234 903 537 5815</a></li>
								<li><a href="tel:+2349035375815">+234 903 537 5815</a></li>
							</ul>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-left">
							<img src="assets/img/icon-2.svg" alt="img">
							<h4>questions</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li><a href="mailto:Pitch<em>N</em>Track@gmail.com">team@Pitch<em>N</em>Track@gmail.com</a></li>
								<li><a href="mailto:Pitch<em>N</em>Track@gmail.com">helpPitch<em>N</em>Track@gmail.com</a></li>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-left">
							<img src="assets/img/icon-3.svg" alt="img">
							<h4>address</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li>8500, Lorem Street, Chicago, IL, 55030</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<form action="videoinsert.php" method="POST" >
						<ul class="form-cover">
							<li class="inp-name">
								<label>Name </label>
								<input id="name" type="text" name="name" required/>
							</li>
							<li class="inp-email">
								<label>Address </label>
								<input id="email" type="text" name="address" required/>
							</li>
							<li class="inp-name">
								<label>Phone number</label>
								<input id="name" type="text" name="number" required/>
							</li>
						</ul>
						<div class="checkbox-wrap">
							<div class="checkbox-cover">
								<input type="checkbox">
								<p>By using this form you agree with the storage and handling of your data by this website.</p>
							</div>
						</div>
						<div class="btn-form-cover">
							<button type="submit" value="submit" name="submit" class="btn">send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== S-CONTACTS-END ============== -->

	<!-- ================== FOOTER ================== -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 footer-item-logo">
					<a href="index-2.html" class="logo-footer"><img src="assets/img/#.png" alt="logo"></a>
					<p>Culture your Passion</p>
					<ul class="social-list">
						<li><a target="_blank" href="https://www.facebook.com/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item footer-item-list">
					<h3>Our services</h3>
					<ul class="footer-Services">
						<li><a href="#">Become a partner</a></li>
						<li><a href="#">Book a session</a></li>
						<li><a href="#">Visit our Blog</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item">
					<h3>Contact us</h3>
					<ul class="footer-cont">
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:09035375815">0-903-537-5815</a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:#@gmail.com">Pitch<em>n</em>Track@gmail.com</a></li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="contacts.html">London,Street 225r.21</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item">
					<h3>Blog</h3>
					<ul class="footer-blog">
						<li>
							<a href="blog.html" class="img-cover"><img src="assets/img/blog1.jpg" alt="img"></a>
							<div class="footer-blog-info">
								<div class="name"><a href="blog.html">Local street race</a></div>
								<p>Local street race with interesting stories…</p>
							</div>
						</li>
						<li>
							<a href="blog.html" class="img-cover"><img src="assets/img/blog2.jpg" alt="img"></a>
							<div class="footer-blog-info">
								<div class="name"><a href="blog.html">View our African children rain ball</a></div>
								<p>Interesting stories of our African children…</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copyright"><a href="#" target="_blank">&copyPitch<em>n</em>Track 2020</a></div>
				<ul class="footer-menu">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contacts.php">Contacts</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<!-- ================ FOOTER END ================ -->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>