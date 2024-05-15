<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>{{$pageTitle}} - {{$subTitle}}</title>
	<meta name="description" content="vicSystems - Software development company">
	<meta name="keywords" content="agency, app, business, company, corporate, designer, freelance, fullpage, modern, office, personal, portfolio, professional, web, web agency">
	<meta name="author" content="vicSystems">
	<link rel="shortcut icon" href="{{asset('/')}}assets/img/logo/f-icon.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/fontawesome.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/animate.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/global.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/swiper.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>
<body class="home-2">
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>

<!-- Start of header section
	============================================= -->
    @include('incs.header')
	<!-- search filed -->
	<div class="search-body">
		<div class="search-form">
			<form action="#" class="search-form-area">
				<input class="search-input" type="search" placeholder="Search Here">
				<button type="submit" class="search-btn1">
					<i class="fas fa-search"></i>
				</button>
			</form>
			<div class="outer-close text-center search-btn">
				<i class="far fa-times"></i>
			</div>
		</div>
	</div>
<!-- End of header section
	============================================= -->
    @yield('content')
<!-- Start Footer section
	============================================= -->
	<footer id="bi-footer-2" class="bi-footer-section-2">
		<div class="bi-footer-cta-2">
			<div class="container">
				<div class="bi-footer-cta-content-2 d-flex justify-content-between align-items-center">
					<div class="bi-footer-cta-social-area d-flex align-items-center justify-content-between">
						<div class="bi-footer-cta-text d-flex align-items-center">
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<i class="fas fa-phone"></i>
							</div>
							<div class="inner-text">
								<span>Give us a call</span>
								<a href="#">+92 123 456 7890</a>
							</div>
						</div>
						<div class="bi-footer-cta-social ul-li">
							<ul>
								<li><a href="#"> <i class="fab fa-instagram"></i></a></li>
								<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"> <i class="fab fa-facebook"></i></a></li>
								<li><a href="#"> <i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="bi-footer-newslatter-form d-flex justify-content-between">
						<span>Join
						Newsletter</span>
						<div class="bi-footer-newslatter position-relative">
							<form action="#" method="get">
								<input type="email" name="email" placeholder="Your email">
								<button>Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-footer-widget-content-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="bi-footer-widget-2">
							<div class="logo-widget">
								<div class="brand-logo">
									<a href="#"><img src="{{asset('/')}}assets/img/logo/logo2.png" alt=""></a>
								</div>
								<div class="logo-info">
									Improve efficiency, providing a better  experience with modern Technological tools
								</div>
								<div class="sponsor-logo">
									<img src="{{asset('/')}}assets/img/logo/sp-logo.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="bi-footer-widget-2 headline ul-li-block">
							<div class="menu-widget">
								<h3 class="widget-title">Resources</h3>
								<ul>
									<li><a href="#">Career</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Career</a></li>
								</ul>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="bi-footer-copyright-2">
			<div class="container">
				<div class="bi-footer-copyright-content-2 text-center">
					© Copyright 2023  All rights reserved.
				</div>
			</div>
		</div>
	</footer>
<!-- End Footer section
	============================================= -->

	<!-- For Js Library -->
	<script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/swiper-bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/appear.js"></script>
    <script src="{{asset('/')}}assets/js/counter.js"></script>
    <script src="{{asset('/')}}assets/js/gsap.min.js"></script>
    <script src="{{asset('/')}}assets/js/knob.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.counterup.min.js"></script>
    <script src="{{asset('/')}}assets/js/waypoints.min.js"></script>
    <script src="{{asset('/')}}assets/js/parallax.min.js"></script>
    <script src="{{asset('/')}}assets/js/ScrollTrigger.min.js"></script>
    <script src="{{asset('/')}}assets/js/ScrollToPlugin.min.js"></script>
    <script src="{{asset('/')}}assets/js/ScrollSmoother.min.js"></script>
    <script src="{{asset('/')}}assets/js/SplitText.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.filterizr.js"></script>
    <script src="{{asset('/')}}assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}assets/js/hover-revel.js"></script>
    <script src="{{asset('/')}}assets/js/split-type.min.js"></script>
    <script src="{{asset('/')}}assets/js/parallax-scroll.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.marquee.min.js"></script>
    <script src="{{asset('/')}}assets/js/wow.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('/')}}assets/js/tilt.jquery.min.js"></script>
    <script src="{{asset('/')}}assets/js/matter.min.js"></script>
    <script src="{{asset('/')}}assets/js/script.js"></script>

</body>

<!-- Mirrored from html.themexriver.com/Haptic-Html/index-2.1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 10:53:25 GMT -->
</html>
