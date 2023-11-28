<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/Haptic-Html/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 10:56:22 GMT -->
<head>
	<meta charset="UTF-8">
	<title>{{$pageTitle}} - {{$subTitle}}</title>
	<meta name="description" content="Haptic - Web And Agency HTML Template">
	<meta name="keywords" content="agency, app, business, company, corporate, designer, freelance, fullpage, modern, office, personal, portfolio, professional, web, web agency">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="{{asset('/')}}assets/img/logo/f-icon.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/fontawesome.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/flaticon_aina.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/animate.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/global.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/swiper.min.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>
<body class="home-1">
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>

<!-- Start of header section
	============================================= -->
    @include('incs.header')
	<!-- Sidebar sidebar Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black">
			<div class="row loader-area">
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
			</div>
		</div>
		<div class="xs-sidebar-widget"  data-background="assets/img/bg/texture.html">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget text-uppercase">
						<i class="fal fa-times"></i> Close
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents headline pera-content">
						<div class="content-inner">
							<div class="sidebar-logo">
								<a href="#"><img src="{{asset('/')}}assets/img/logo/logo2.png" alt=""></a>
							</div>
							<div class="sidebar-menu ul-li-block">
								<ul>
									<li><a href="about.html"><i class="fal fa-home"></i> About Us </a></li>
									<li><a href="service.html"><i class="fal fa-cogs"></i> Service </a></li>
									<li><a href="testimonila.html"><i class="fal fa-comments-alt"></i> Testimonial </a></li>
									<li><a href="team.html"><i class="fal fa-users"></i> Our Team </a></li>
									<li><a href="portfolio.html"><i class="fal fa-briefcase"></i> Portfolio </a></li>
									<li><a href="blog.html"><i class="fal fa-blog"></i> Blog </a></li>
									<li><a href="contact.html"><i class="fal fa-envelope"></i> Contact </a></li>
								</ul>
							</div>
							<div class="sidebar-more-menu text-uppercase d-flex ul-li">
								<span>More:</span>
								<ul>
									<li><a href="#">My Account </a></li>
									<li><a href="#">Job Apply </a></li>
									<li><a href="#">Privacy Policy </a></li>
								</ul>
							</div>
							<div class="sidebar-social ul-li-block">
								<span>Social:</span>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
									<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i> Dribble</a></li>
									<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
								</ul>
							</div>
							<div class="sidebar-copyright text-center">
								© Copyright 2023. All Rights Reserved.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- sidebar cart start -->
	<div class="cart_sidebar">
		<div class="cart_sidebar_top">
			<h2 class="heading_title">Cart</h2>
			<button  class="cart_close_btn tx-close"></button>
		</div>
		<div class="cart_items_list">
			<div class="cart_item">
				<div class="item_image">
					<img src="{{asset('/')}}assets/img/shop/s_img1.jpg" alt="image_not_found">
				</div>
				<div class="item_content headline">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet.
					</h4>
					<span class="item_price">$19.00</span>
					<button  class="remove_btn"><i class="fal fa-times"></i></button>
				</div>
			</div>
			<div class="cart_item">
				<div class="item_image">
					<img src="{{asset('/')}}assets/img/shop/s_img2.jpg" alt="image_not_found">
				</div>
				<div class="item_content headline">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet.
					</h4>
					<span class="item_price">$22.00</span>
					<button  class="remove_btn"><i class="fal fa-times"></i></button>
				</div>
			</div>
			<div class="cart_item">
				<div class="item_image">
					<img src="{{asset('/')}}assets/img/shop/s_img3.jpg" alt="image_not_found">
				</div>
				<div class="item_content headline">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet.
					</h4>
					<span class="item_price">$43.00</span>
					<button  class="remove_btn"><i class="fal fa-times"></i></button>
				</div>
			</div>
			<div class="cart_item">
				<div class="item_image">
					<img src="{{asset('/')}}assets/img/shop/s_img4.jpg" alt="image_not_found">
				</div>
				<div class="item_content headline">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet.
					</h4>
					<span class="item_price">$14.00</span>
					<button  class="remove_btn"><i class="fal fa-times"></i></button>
				</div>
			</div>
		</div>
		<div class="cart_sidebar_bottom">
			<div class="total_price">
				<span>Sub Total:</span>
				<span>$87.00</span>
			</div>
			<div class="cart_sidebar_button">
				<a  href="#">View Cart</a>
				<a  href="#">Checkout</a>
			</div>
		</div>
	</div>
<!-- End of header section
	============================================= -->


    @yield('content')

<!-- Start of Footer  section
	============================================= -->
	<footer id="bi-footer" class="bi-footer-section" data-background="assets/img/bg/footer-bg.jpg">
		<div class="bi-footer-cta position-relative">
			<div class="container">
				<div class="bi-footer-cta-content headline d-flex align-items-center  justify-content-between flex-wrap" data-background="assets/img/bg/cta-bg.jpg">
					<div class="bi-footer-cta-text">
						<h3>Looking for a
						Design Parner?</h3>
					</div>
					<div class="bi-cta-btn">
						<div class="bi-btn-1  bi-btn-area text-uppercase">
							<a class="bi-btn-main  bi-btn-hover bi-btn-item" href="contact.html">  <span></span> Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-footer-widget-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="bi-footer-widget headline pera-content ul-li-block">
							<div class="about-widget">
								<h3>Working Together
								Ideas come to life</h3>
								<p>
									No matter how big your company is, as you expand and reach new highs you’ll want an agency to have your back. One with a process
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="bi-footer-widget headline pera-content ul-li-block">
							<div class="menu-widget">
								<h3 class="widget-title">UI Design</h3>
								<ul>
									<li><a href="#">Estimation</a></li>
									<li><a href="#">Research</a></li>
									<li><a href="#">Storyboard</a></li>
									<li><a href="#">User Flow</a></li>
									<li><a href="#">Information </a></li>
									<li><a href="#">Storyboard (IA)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="bi-footer-widget headline pera-content ul-li-block">
							<div class="menu-widget">
								<h3 class="widget-title">Development</h3>
								<ul>
									<li><a href="#">Front End (HTML, CSS, React)</a></li>
									<li><a href="#">Backend (Node.js, MongoDB)</a></li>
									<li><a href="#">iOS (Swift)</a></li>
									<li><a href="#">Android (Kotlin, Flutter)</a></li>
									<li><a href="#">Post Delivery Support</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="bi-footer-widget headline pera-content ul-li-block">
							<div class="menu-widget">
								<h3 class="widget-title">UI Design</h3>
								<ul>
									<li><a href="#">Define Idea</a></li>
									<li><a href="#">Target Audience</a></li>
									<li><a href="#">Idea Validation</a></li>
									<li><a href="#">Customer Value </a></li>
									<li><a href="#">Build MVP Version</a></li>
									<li><a href="#">Competitor Reserach</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-footer-social">
			<div class="container">
				<div class="bi-footer-social-content ul-li">
					<ul>
						<li><a href="#"><i class="fal fa-basketball-ball"></i> Dribbble </a></li>
						<li><a href="#"><i class="fab fa-behance-square"></i>  Behance  </a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i> Linked In    </a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook  </a></li>
						<li><a href="#"><i class="fab fa-instagram"></i> Instagram  </a></li>
						<li><a href="#"><i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bi-footer-logo-area">
			<div class="container">
				<div class="bi-footer-logo">
					<div class="brand-logo text-center">
						<a href="#"><img src="{{asset('/')}}assets/img/logo/logo2.png" alt=""></a>
					</div>
					<div class="logo-mail text-center headline">
						<h3><a href="#">email@webs.com</a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-footer-copyright text-center">
			Copyright 2023 @webagency
		</div>
	</footer>
<!-- End of Footer  section
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

<!-- Mirrored from html.themexriver.com/Haptic-Html/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 10:56:26 GMT -->
</html>
