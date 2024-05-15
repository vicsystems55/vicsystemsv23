@extends('layouts')

@section('content')
<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="-90"  data-bs-smooth-scroll="true">
    <!-- Start of Banner section
        ============================================= -->
        <section id="bi-banner" class="bi-banner-section"  data-background="assets/img/slider/banner_2.png">
            <div class="bi-banner-content position-relative">
                {{-- <span class="bi-banner-img position-absolute scene banner_img_1  wow zoomIn"  data-wow-delay="0ms" data-wow-duration="2000ms"><img  class="layer" data-depth="0.9" src="{{asset('/')}}assets/img/slider/bn1.png" alt=""></span>
                <span class="bi-banner-img position-absolute scene banner_img_2  wow zoomIn"  data-wow-delay="200ms" data-wow-duration="2000ms"><img class="layer" data-depth="-0.9" src="{{asset('/')}}assets/img/slider/bn2.png" alt=""></span>
                <span class="bi-banner-img position-absolute scene banner_img_3  wow zoomIn"  data-wow-delay="300ms" data-wow-duration="2000ms"><img class="layer" data-depth="-0.9" src="{{asset('/')}}assets/img/slider/bn3.png" alt=""></span>
                <span class="bi-banner-img position-absolute scene banner_img_4  wow zoomIn"  data-wow-delay="100ms" data-wow-duration="2000ms"><img class="layer" data-depth="0.9" src="{{asset('/')}}assets/img/slider/bn4.png" alt=""></span>
                <span class="bi-banner-img position-absolute scene banner_img_5  wow zoomIn"  data-wow-delay="800ms" data-wow-duration="2000ms"><img class="layer" data-depth="-0.9" src="{{asset('/')}}assets/img/slider/bn5.png" alt=""></span> --}}
                <div style="padding-bottom: 20px;" class="bi-banner-text headline text-center pera-content">
                    <div class="banner-subtitle text-uppercase wow fadeInUp"  data-wow-delay="0ms" data-wow-duration="1000ms">
                        Welcome VicSystems Technologies Ltd.
                    </div>
                    <h1 class="headline-title">Developing Functionalities</h1>
                    <div class="bins-text">
                        <p>We take great pride in not just building systems, but building systems that work, are scalable and maintainable</p>
                    </div>
                    <div class="bi-btn-2  bi-btn-area text-uppercase wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1500ms">
                        <a class="bi-btn-main  bi-btn-hover bi-btn-item" href="contact">  <span></span> Request a Quote</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Banner section
        ============================================= -->

        <!-- Start of Skill logo  section
        ============================================= -->
        <section id="bi-skill-logo" class="bi-skill-logo-section" >
            <div class="container">
                <div class="bi-skill-logo-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="bi-skill-logo-text-area d-flex align-items-center">
                                <div class="bi-skill-logo-play">
                                    <a class="video_box" href="https://www.youtube.com/watch?v=Nv7RgGpu6ME"><img src="{{asset('/')}}assets/img/logo/play1.png" alt=""></a>
                                </div>
                                <div class="bi-skill-logo-text headline">
                                    <h2 class="tx-split-text split-in-right">Our Skills
                                    Development</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="bi-skill-logo-wrapper wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1000ms">
                                <div class="bi-skill-logo-area d-flex">
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk1.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk2.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk3.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="bi-skill-logo-wrapper wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1000ms">
                                <div class="bi-skill-logo-area d-flex">
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk5.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk4.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk2.png" alt="">
                                    </div>
                                    <div class="bi-skill-logo-item">
                                        <img src="{{asset('/')}}assets/img/logo/sk1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Skill logo  section
        ============================================= -->

    <!-- Start of Quality  section
        ============================================= -->
        <section id="bi-quality" class="bi-quality-section d-none">
            <div class="container">
                <div class="bi-quality-content dark-bg-title">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bi-section-title-1 headline pera-content">
                                <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1000ms">
                                    Welcome to VicSystems Technologies Ltd.
                                </div>
                                <h2 class="tx-split-text split-in-right">Driven by Quality
                                & Dedicated</h2>
                                <div class="bins-text">
                                    <p class="bins-text">We believe that great design should not be out of reach, so our
                                    services are less than half the price of a full-time designer.</p>
                                </div>
                            </div>
                            <div class="bi-complete-work-counter headline wow fadeInRight"  data-wow-delay="400ms" data-wow-duration="1000ms">
                                <h4>Work Completed</h4>
                                <h3><span class="counter">86900</span>+</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-quality-feature-area">
                                <div class="bi-quality-feature-item position-relative d-flex align-items-center wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <div class="feature-icon">
                                        <img src="{{asset('/')}}assets/img/icon/ic1.png" alt="">
                                    </div>
                                    <div class="feature-text headline">
                                        <h3><a href="service-single">Branding & Art</a></h3>
                                    </div>
                                </div>
                                <div class="bi-quality-feature-item position-relative d-flex align-items-center wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1000ms">
                                    <div class="feature-icon">
                                        <img src="{{asset('/')}}assets/img/icon/ic2.png" alt="">
                                    </div>
                                    <div class="feature-text headline">
                                        <h3><a href="service-single">Design & Development</a></h3>
                                    </div>
                                </div>
                                <div class="bi-quality-feature-item position-relative d-flex align-items-center wow fadeInUp"  data-wow-delay="500ms" data-wow-duration="1000ms">
                                    <div class="feature-icon">
                                        <img src="{{asset('/')}}assets/img/icon/ic3.png" alt="">
                                    </div>
                                    <div class="feature-text headline">
                                        <h3><a href="service-single">3d Animation </a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Quality  section
        ============================================= -->

    <!-- Start of Key Feature section
        ============================================= -->
        <section id="bi-key-feature" class="bi-key-feature-section position-relative ">
            <span class="bi-side-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/bg/shape_1.png" alt=""></span>
            <div class="container">
                <div class="bi-key-feature-content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bi-key-feature-title-text  dark-bg-title">
                                <div class="bi-section-title-2 headline">
                                    <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1000ms">
                                        Welcome to VicSystems Technologies Ltd.
                                    </div>
                                    <h2 class="headline-title">We Are Pasionate <br>
                                        <span>Experienced <br></span>
                                    We've Got You Covered</h2>
                                </div>
                                <div class="bi-btn-2  bi-btn-area text-uppercase wow fadeInRight"  data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <a class="bi-btn-main  bi-btn-hover bi-btn-item" href="about">  <span></span>About Company</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bi-key-feature-item-area">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="bi-key-feature-item">
                                            <div class="bi-key-feature-icon-number d-flex justify-content-between align-items-center">
                                                <div class="feature-icon position-relative">
                                                    <i class="fab fa-canadian-maple-leaf"></i>
                                                </div>
                                                <div class="feature-number">
                                                    1
                                                </div>
                                            </div>
                                            <div class="bi-key-feature-text headline pera-content">
                                                <h3><a href="#">Product Design</a></h3>
                                                <p>As a team, we create seamless software experiences for user satisfaction.</p>
                                            </div>
                                            <div class="bi-key-feature-list ul-li-block">
                                                <ul>
                                                    <li>Hi-Fidelity Wireframe</li>
                                                    <li>AI Integration</li>
                                                    <li>UI/UX</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp"  data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="bi-key-feature-item">
                                            <div class="bi-key-feature-icon-number d-flex justify-content-between align-items-center">
                                                <div class="feature-icon position-relative">
                                                    <i class="fas fa-database"></i>
                                                </div>
                                                <div class="feature-number">
                                                    2
                                                </div>
                                            </div>
                                            <div class="bi-key-feature-text headline pera-content">
                                                <h3><a href="#">Development</a></h3>
                                                <p>We code seamless software experiences for user satisfaction.</p>
                                            </div>
                                            <div class="bi-key-feature-list ul-li-block">
                                                <ul>
                                                    <li>Front End ( React, Vue, HTML, CSS, Javascript )</li>
                                                    <li>Mobile Apps (Android, iOS)</li>
                                                    <li>Post Delivery Support</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Key Feature section
        ============================================= -->

        <!-- Start Of Portfolio section
	============================================= -->
	<section id="bi-portfolio-4" class="bi-portfolio-section-4">
		<div class="bi-title-waterprint headline">
			<h2>Our Best Projects </h2>
		</div>
		<div class="container">
			<div class="bi-section-title-4 text-center headline">
				<div class="sub-title position-relative text-uppercase wow fadeInRight"  data-wow-delay="100ms" data-wow-duration="1000ms">
					Our Projects
				</div>
				<h2 class="headline-title">Explore Our Best Recently
				Completed Projects</h2>
			</div>
			<div class="bi-portfolio-content-4">
				<div class="row">
					<div class="col-lg-6">
						<div class="bi-portfolio-item-wrapper">
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="100ms" data-wow-duration="1000ms"  data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro1.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="https://echooling-react.vercel.app">Educational Websites</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="200ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro2.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">Banking Landing Page Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro3.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">Travel Website Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro4.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">Mobile Application Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="bi-portfolio-item-wrapper-2">
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="150ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro5.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">AI Chatting Website Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="250ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro6.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">Mobile Application Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="350ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro7.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="portfolio-single.html">Simple Phone Anaylytics UI</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
							<div class="bi-portfolio-item-4 wow fadeInUp"  data-wow-delay="450ms" data-wow-duration="1000ms" data-tilt data-tilt-max="2">
								<div class="portfolio-img-4">
									<img src="assets/img/project/pro8.png" alt="">
								</div>
								<div class="portfolio-text headline">
									<h3><a href="print.min.html">Task Management Apps Design</a></h3>
									<div class="portfolio-category">
										<a href="portfolio.html">UI Design</a>
										<a href="portfolio.html">UX Design</a>
										<a href="portfolio.html">Website Design</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bi-btn-4 text-center text-uppercase">
					<a href="portfolio.html">view More <span class="d-flex justify-content-center align-items-center"><img src="assets/img/icon/arrow.svg" alt=""></span></a>
				</div>
			</div>
		</div>
	</section>
<!-- End Of Portfolio section
	============================================= -->

        <!-- Start of About section
    ============================================= -->
        <section id="bi-about-3" class="bi-about-section-3 position-relative">
            <span class="bi-shape-anim anim_1 position-absolute"><img src="{{asset('/')}}assets/img/icon/is5.png" alt=""></span>
            <span class="bi-shape-anim anim_2 position-absolute" data-parallax='{"y" : -60, "rotateY":800}'><img src="{{asset('/')}}assets/img/icon/is6.png" alt=""></span>
            <span class="bi-shape-anim anim_3 position-absolute" data-parallax='{"y" : 60, "rotateY": -800}'><img src="{{asset('/')}}assets/img/icon/is7.png" alt=""></span>
            <div class="container">
                <div class="bi-about-content-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bi-about-text-area-3">
                                <div class="bi-section-title-3 headline pera-content">
                                    <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1000ms">
                                        WHAT WE OFFER
                                    </div>
                                    <h2 class="tx-split-text split-in-right">Providing digital solutions fit for our clients needs</h2>
                                    <div class="bins-text">
                                        <p>
                                            We work to ensure our clients receive value for their money. Harnessing digital tools to achieve desired results.
                                        </p>
                                    </div>
                                </div>
                                <div class="bi-abut-feature-list ul-li wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <ul>
                                        <li><i class="fal fa-users"></i> Dedicated Team</li>
                                        <li><i class="fal fa-cogs"></i> Clean Setup</li>
                                        <li><i class="fal fa-user-headset"></i> 24/7  Support</li>
                                        <li><i class="fal fa-award"></i> Winning Award</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bi-about-img-3  position-relative">
                                <div class="about-img bi-img-animation">
                                    <img src="{{asset('/')}}assets/img/about/ab5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bi-about-video-play-area position-relative">
                    <div class="bi-about-exp-area position-absolute headline text-center wow zoomIn"  data-wow-delay="500ms" data-wow-duration="1500ms" data-background="assets/img/bg/exp-bg.png">
                        <h3>20</h3>
                        <span>Year Of Working
                        Experiance</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bi-about-video-play position-relative  bi-img-animation">
                                <div class="video-play-btn position-absolute">
                                    <a class="video_box justify-content-center  align-items-center d-flex" href="https://www.youtube.com/watch?v=Nv7RgGpu6ME"><i class="fas fa-play"></i></a>
                                    <span class="video_btn_border border_wrap-1"></span>
                                    <span class="video_btn_border border_wrap-2"></span>
                                    <span class="video_btn_border border_wrap-3"></span>
                                </div>
                                <div class="video-play-img">
                                    <img src="{{asset('/')}}assets/img/about/ab6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-about-text-quote-area bins-text headline pera-content">
                                <p>“Collaborating with VicSystems is consistently invigorating; their creativity is boundless, continually motivating us to reach our envisioned objectives. Mr. Victor, an innovator at heart, consistently endeavors to explore new horizons of creativity” </p>
                                <div class="quote-author text-uppercase wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <h3>Kristin Watson</h3>
                                    <span>CEO OF (ZLITEMES)</span>
                                </div>
                                <div class="bi-btn-3 text-uppercase wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <a href="about">Learn More <img src="{{asset('/')}}assets/img/icon/arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of About section
        ============================================= -->


    <!-- Start of Pricing section
        ============================================= -->
        <section id="bi-pricing-2" class="bi-pricing-section-2 position-relative">
            <span class="bi-side-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/bg/shape_6.png" alt=""></span>
            <div class="container">
                <div class="bi-section-title-2 text-center  headline">
                    <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1500ms">
                        Welcome to VicSystems Technologies Ltd.
                    </div>
                    <h2 class="headline-title">Affordable
                        <span>Pricing Plan</span>
                    </h2>
                </div>
                <div class="bi-pricing-content-2">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="bi-pricing-item-2" data-background="assets/img/bg/price-bg.jpg">
                                <div class="bi-pricing-title-2 headline pera-content">
                                    <span class="text-uppercase">Are digital agencies</span>
                                    <h3>Standard Plan</h3>
                                    <h4><sub>From</sub> $20.00 <sub>Per Month</sub></h4>
                                </div>
                                <div class="bi-price-list-area ul-li-block">
                                    <ul>
                                        <li>Line Rental Included</li>
                                        <li>Front End (HTML, CSS, React)</li>
                                        <li>No Activation Charges</li>
                                        <li>Backend (Node.js, MongoDB)</li>
                                        <li>Information Architecture (IA) Wireframe</li>
                                    </ul>
                                </div>
                                <div class="bi-btn-2  bi-btn-area  text-uppercase">
                                    <a class="bi-btn-main  bi-btn-hover bi-btn-item" href="contact">  <span></span>Hire Us now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="bi-pricing-item-2" data-background="assets/img/bg/price-bg.jpg">
                                <div class="bi-pricing-title-2 headline pera-content">
                                    <span class="text-uppercase">Are digital agencies</span>
                                    <h3>Annual Plan</h3>
                                    <h4><sub>From</sub> $50.00 <sub>Per Year</sub></h4>
                                </div>
                                <div class="bi-price-list-area ul-li-block">
                                    <ul>
                                        <li>Line Rental Included</li>
                                        <li>Front End (HTML, CSS, React)</li>
                                        <li>No Activation Charges</li>
                                        <li>Backend (Node.js, MongoDB)</li>
                                        <li>Information Architecture (IA) Wireframe</li>
                                    </ul>
                                </div>
                                <div class="bi-btn-2  bi-btn-area  text-uppercase">
                                    <a class="bi-btn-main  bi-btn-hover bi-btn-item" href="contact">  <span></span>Hire Us now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Pricing section

        Start of Consult Cta section
        ============================================= -->
        <section id="bi-consult-cta" class="bi-consult-cta-section position-relative" data-background="assets/img/bg/consult-bg.jpg">
            <div class="container">
                <div class="bi-consult-cta-content">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="bi-consult-cta-text-area">
                                <div class="bi-section-title-2 headline pera-content">
                                    <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1000ms">
                                        Welcome to VicSystems Technologies Ltd.
                                    </div>
                                    <h2 class="tx-split-text split-in-right">
                                        <span>Best Consultant  </span>
                                        Digital Agency.
                                    </h2>
                                </div>
                                <div class="bi-consult-cta-form-btn ul-li wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <ul class="nav nav-tabs" id="bi_consult_tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link active" id="consult_tab_1" data-bs-toggle="tab" data-bs-target="#consult_1_1"  role="tab"  aria-selected="false">
                                                <div class="bi-consult-btn-area position-relative">
                                                    <div class="bi-consult-btn text-uppercase text-center">
                                                        <i class="fal fa-laptop-code"></i>
                                                        <span>Web</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link " id="consult_tab_2" data-bs-toggle="tab" data-bs-target="#consult_1_2"  role="tab"  aria-selected="false">
                                                <div class="bi-consult-btn-area position-relative">
                                                    <div class="bi-consult-btn text-uppercase text-center">
                                                        <i class="fal fa-tablet-android-alt"></i>
                                                        <span>android</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link " id="consult_tab_3" data-bs-toggle="tab" data-bs-target="#consult_1_3"  role="tab"  aria-selected="false">
                                                <div class="bi-consult-btn-area position-relative">
                                                    <div class="bi-consult-btn text-uppercase text-center">
                                                        <i class="fab fa-app-store-ios"></i>
                                                        <span>IOS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-consult-form-tab-area">
                                <div class="tab-content" id="bi_consult_tab8">
                                    <div class="tab-pane animated fadeInUp show active" id="consult_1_1" role="tabpanel" aria-labelledby="consult_tab_1">
                                        <div class="bi-consult-form-wrap d-flex">
                                            <div class="bi-consult-form-tilte text-uppercase">
                                                Build your website
                                            </div>
                                            <div class="bi-consult-form-area">
                                                <form action="#" method="get">
                                                    <div class="bi-consult-form-input"  data-background="assets/img/bg/cta-form-bg.jpg">
                                                        <label><i class="fal fa-user"></i>Name*</label>
                                                        <input type="text" name="name" placeholder="Type Name">
                                                        <label><i class="fal fa-envelope"></i>Email*</label>
                                                        <input type="text" name="Email" placeholder="Type Email">
                                                        <label><i class="fal fa-phone"></i>Phone*</label>
                                                        <input type="text" name="name" placeholder="Type Phone Number">
                                                        <label><i class="fal fa-plug"></i>Subject*</label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <button> Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="consult_1_2" role="tabpanel" aria-labelledby="consult_tab_2">
                                        <div class="bi-consult-form-wrap d-flex">
                                            <div class="bi-consult-form-tilte text-uppercase">
                                                Build your Android App
                                            </div>
                                            <div class="bi-consult-form-area">
                                                <form action="#" method="get">
                                                    <div class="bi-consult-form-input"  data-background="assets/img/bg/cta-form-bg.jpg">
                                                        <label><i class="fal fa-user"></i>Name*</label>
                                                        <input type="text" name="name" placeholder="Type Name">
                                                        <label><i class="fal fa-envelope"></i>Email*</label>
                                                        <input type="text" name="Email" placeholder="Type Email">
                                                        <label><i class="fal fa-phone"></i>Phone*</label>
                                                        <input type="text" name="name" placeholder="Type Phone Number">
                                                        <label><i class="fal fa-plug"></i>Subject*</label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <button> Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="consult_1_3" role="tabpanel" aria-labelledby="consult_tab_3">
                                        <div class="bi-consult-form-wrap d-flex">
                                            <div class="bi-consult-form-tilte text-uppercase">
                                                Build your ISO App
                                            </div>
                                            <div class="bi-consult-form-area">
                                                <form action="#" method="get">
                                                    <div class="bi-consult-form-input"  data-background="assets/img/bg/cta-form-bg.jpg">
                                                        <label><i class="fal fa-user"></i>Name*</label>
                                                        <input type="text" name="name" placeholder="Type Name">
                                                        <label><i class="fal fa-envelope"></i>Email*</label>
                                                        <input type="text" name="Email" placeholder="Type Email">
                                                        <label><i class="fal fa-phone"></i>Phone*</label>
                                                        <input type="text" name="name" placeholder="Type Phone Number">
                                                        <label><i class="fal fa-plug"></i>Subject*</label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <button> Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Consult Cta section
        ============================================= -->



    <!-- Start of team section
        ============================================= -->
        <section id="bi-team-2" class="bi-team-section-2 position-relative">
            <span class="bi-side-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/bg/shape_7.png" alt=""></span>
            <div class="container">
                <div class="bi-section-title-2 text-center  headline">
                    <div class="bi-subtitle text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1500ms">
                        Meet the Expert People
                    </div>
                    <h2 class="headline-title">Expert
                        <span>& Professional</span>
                    </h2>
                </div>
                <div class="bi-team-content-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1200ms">
                            <div class="bi-team-item-2 text-center">
                                <div class="bi-team-img-shape position-relative">
                                    <span class="team-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape1.png" alt=""></span>
                                    <span class="team-shape shape_2 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape2.png" alt=""></span>
                                    <div class="bi-team-img">
                                        <img src="{{asset('/')}}assets/img/team/tm2.1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bi-team-text headline">
                                    <h3><a href="team-single">Asuquo Victor</a></h3>
                                    <span> CTO</span>
                                </div>
                                <div class="bi-team-social ul-li">
                                    <ul>
                                        <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="400ms" data-wow-duration="1200ms">
                            <div class="bi-team-item-2 text-center">
                                <div class="bi-team-img-shape position-relative">
                                    <span class="team-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape1.png" alt=""></span>
                                    <span class="team-shape shape_2 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape2.png" alt=""></span>
                                    <div class="bi-team-img">
                                        <img src="{{asset('/')}}assets/img/team/tm2.2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bi-team-text headline">
                                    <h3><a href="team-single">Robert jonson</a></h3>
                                    <span> Stock Developer</span>
                                </div>
                                <div class="bi-team-social ul-li">
                                    <ul>
                                        <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="500ms" data-wow-duration="1200ms">
                            <div class="bi-team-item-2 text-center">
                                <div class="bi-team-img-shape position-relative">
                                    <span class="team-shape shape_1 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape1.png" alt=""></span>
                                    <span class="team-shape shape_2 position-absolute"><img src="{{asset('/')}}assets/img/icon/tm-shape2.png" alt=""></span>
                                    <div class="bi-team-img">
                                        <img src="{{asset('/')}}assets/img/team/tm2.3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bi-team-text headline">
                                    <h3><a href="team-single">Richerd william</a></h3>
                                    <span> Stock Developer</span>
                                </div>
                                <div class="bi-team-social ul-li">
                                    <ul>
                                        <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"> <i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of team  section
        ============================================= -->

    <!-- Start Counter section
        ============================================= -->
        <section id="bi-counter-3" class="bi-counter-section-3">
            <div class="container">
                <div class="bi-counter-content-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="bi-counter-item-3 position-relative headline pera-content d-flex align-items-center justify-content-between">
                                <h3><span class="counter">10</span>x</h3>
                                <p>Traffic
                                Multiplied</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bi-counter-item-3 position-relative headline pera-content d-flex align-items-center justify-content-between">
                                <h3><span class="counter">41</span>k</h3>
                                <p>AI
                                Content File</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bi-counter-item-3 position-relative headline pera-content d-flex align-items-center justify-content-between">
                                <h3><span class="counter">3</span>k+</h3>
                                <p>Studios
                                ToUpdate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Counter section
        ============================================= -->

    <!-- Start Testimonial section
        ============================================= -->
        <section id="bi-testimonial-2" class="bi-testimonial-section-2">
            <div class="background_parallax" data-background="assets/img/bg/test-bg.jpg">
                <div class="container">
                    <div class="bi-testimonial-content position-relative">
                        <div class="bi-testimonial-thumb position-absolute">
                            <div class="bi-testimonial-nav swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div  class="bi-testimonial-nav-item">
                                            <img src="{{asset('/')}}assets/img/testimonial/test-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div  class="bi-testimonial-nav-item">
                                            <img src="{{asset('/')}}assets/img/testimonial/test-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div  class="bi-testimonial-nav-item">
                                            <img src="{{asset('/')}}assets/img/testimonial/test-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div  class="bi-testimonial-nav-item">
                                            <img src="{{asset('/')}}assets/img/testimonial/test-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div  class="bi-testimonial-nav-item">
                                            <img src="{{asset('/')}}assets/img/testimonial/test-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bi-testimonial-item-content">
                            <div class="bi-testimonial-slider-for swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bi-testimonial-item-2 d-flex align-items-center">
                                            <div class="bi-testimonial-img">
                                                <img src="{{asset('/')}}assets/img/testimonial/test1.jpg" alt="">
                                            </div>
                                            <div class="bi-testimonial-text">
                                                <div class="testimonial-quote">
                                                    <img src="{{asset('/')}}assets/img/icon/qt.png" alt="">
                                                </div>
                                                <div class="testimonial-desc">
                                                    Since 1985 Reed has pioneered specialist recruitment Sourcing knowledgeable,
                                                    skilled professionals pioneered Specialist recruitment, sourcing.
                                                </div>
                                                <div class="testimonial-author headline">
                                                    <h3>Tandre Flop</h3>
                                                    <span>CEO, Squaround</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bi-testimonial-item-2 d-flex align-items-center">
                                            <div class="bi-testimonial-img">
                                                <img src="{{asset('/')}}assets/img/testimonial/test2.jpg" alt="">
                                            </div>
                                            <div class="bi-testimonial-text">
                                                <div class="testimonial-quote">
                                                    <img src="{{asset('/')}}assets/img/icon/qt.png" alt="">
                                                </div>
                                                <div class="testimonial-desc">
                                                    Since 1985 Reed has pioneered specialist recruitment Sourcing knowledgeable,
                                                    skilled professionals pioneered Specialist recruitment, sourcing.
                                                </div>
                                                <div class="testimonial-author headline">
                                                    <h3>Tandre Flop</h3>
                                                    <span>CEO, Squaround</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bi-testimonial-item-2 d-flex align-items-center">
                                            <div class="bi-testimonial-img">
                                                <img src="{{asset('/')}}assets/img/testimonial/test3.jpg" alt="">
                                            </div>
                                            <div class="bi-testimonial-text">
                                                <div class="testimonial-quote">
                                                    <img src="{{asset('/')}}assets/img/icon/qt.png" alt="">
                                                </div>
                                                <div class="testimonial-desc">
                                                    Since 1985 Reed has pioneered specialist recruitment Sourcing knowledgeable,
                                                    skilled professionals pioneered Specialist recruitment, sourcing.
                                                </div>
                                                <div class="testimonial-author headline">
                                                    <h3>Tandre Flop</h3>
                                                    <span>CEO, Squaround</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bi-testimonial-item-2 d-flex align-items-center">
                                            <div class="bi-testimonial-img">
                                                <img src="{{asset('/')}}assets/img/testimonial/test1.jpg" alt="">
                                            </div>
                                            <div class="bi-testimonial-text">
                                                <div class="testimonial-quote">
                                                    <img src="{{asset('/')}}assets/img/icon/qt.png" alt="">
                                                </div>
                                                <div class="testimonial-desc">
                                                    Since 1985 Reed has pioneered specialist recruitment Sourcing knowledgeable,
                                                    skilled professionals pioneered Specialist recruitment, sourcing.
                                                </div>
                                                <div class="testimonial-author headline">
                                                    <h3>Tandre Flop</h3>
                                                    <span>CEO, Squaround</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bi-testimonial-item-2 d-flex align-items-center">
                                            <div class="bi-testimonial-img">
                                                <img src="{{asset('/')}}assets/img/testimonial/test2.jpg" alt="">
                                            </div>
                                            <div class="bi-testimonial-text">
                                                <div class="testimonial-quote">
                                                    <img src="{{asset('/')}}assets/img/icon/qt.png" alt="">
                                                </div>
                                                <div class="testimonial-desc">
                                                    Since 1985 Reed has pioneered specialist recruitment Sourcing knowledgeable,
                                                    skilled professionals pioneered Specialist recruitment, sourcing.
                                                </div>
                                                <div class="testimonial-author headline">
                                                    <h3>Tandre Flop</h3>
                                                    <span>CEO, Squaround</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Testimonial section
        ============================================= -->

    <!-- Start Of Blog section
        ============================================= -->
        <section id="bi-blog-4" class="bi-blog-section-4">
            <div class="container">
                <div class="bi-service-top-content-4 d-flex align-items-end justify-content-between">
                    <div class="bi-section-title-4 headline">
                        <div class="sub-title position-relative text-uppercase wow fadeInRight"  data-wow-delay="100ms" data-wow-duration="1000ms">
                            Our Blog & News
                        </div>
                        <h2 class="tx-split-text split-in-right">Read Our Recent News Get Every Update</h2>
                    </div>
                    <div class="bi-btn-4 text-uppercase wow fadeInRight"  data-wow-delay="200ms" data-wow-duration="1000ms">
                        <a href="blog-2">Learn more <span class="d-flex justify-content-center align-items-center"><img src="{{asset('/')}}assets/img/icon/arrow.svg" alt=""></span></a>
                    </div>
                </div>
                <div class="bi-blog-top-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="100ms" data-wow-duration="1000ms">
                            <div class="bi-blog-item-4 position-relative">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('/')}}assets/img/blog/blg1.png" alt="">
                                    <span class="blog-meta position-absolute"><a href="#">18 April, 2023</a></span>
                                </div>
                                <div class="blog-text headline pera-content">
                                    <h3><a href="blog-single">Basic Rule of Running Web</a></h3>
                                    <p>Fusce sit amet semper velit. Ut fringilla nunc a maximus interdum. Cras pharetra scelerisque sem commodo aliquet.</p>
                                </div>
                                <div class="blog-author-more d-flex justify-content-between align-items-center">
                                    <div class="blog-author d-flex align-items-center">
                                        <div class="inner-img">
                                            <img src="{{asset('/')}}assets/img/blog/test-1.jpg" alt="">
                                        </div>
                                        <div class="inner-text text-uppercase">
                                            Eleanor Pena
                                        </div>
                                    </div>
                                    <div class="blog-more text-uppercase">
                                        <a href="blog-single">Read More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="bi-blog-item-4 position-relative">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('/')}}assets/img/blog/blg2.png" alt="">
                                    <span class="blog-meta position-absolute"><a href="#">18 April, 2023</a></span>
                                </div>
                                <div class="blog-text headline pera-content">
                                    <h3><a href="blog-single">UX Checklists for UI Desin</a></h3>
                                    <p>Fusce sit amet semper velit. Ut fringilla nunc a maximus interdum. Cras pharetra scelerisque sem commodo aliquet.</p>
                                </div>
                                <div class="blog-author-more d-flex justify-content-between align-items-center">
                                    <div class="blog-author d-flex align-items-center">
                                        <div class="inner-img">
                                            <img src="{{asset('/')}}assets/img/blog/test-1.jpg" alt="">
                                        </div>
                                        <div class="inner-text text-uppercase">
                                            Eleanor Pena
                                        </div>
                                    </div>
                                    <div class="blog-more text-uppercase">
                                        <a href="blog-single">Read More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="300ms" data-wow-duration="1000ms">
                            <div class="bi-blog-item-4 position-relative">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('/')}}assets/img/blog/blg3.png" alt="">
                                    <span class="blog-meta position-absolute"><a href="#">18 April, 2023</a></span>
                                </div>
                                <div class="blog-text headline pera-content">
                                    <h3><a href="blog-single">A Designers UI/UX Comple</a></h3>
                                    <p>Fusce sit amet semper velit. Ut fringilla nunc a maximus interdum. Cras pharetra scelerisque sem commodo aliquet.</p>
                                </div>
                                <div class="blog-author-more d-flex justify-content-between align-items-center">
                                    <div class="blog-author d-flex align-items-center">
                                        <div class="inner-img">
                                            <img src="{{asset('/')}}assets/img/blog/test-1.jpg" alt="">
                                        </div>
                                        <div class="inner-text text-uppercase">
                                            Eleanor Pena
                                        </div>
                                    </div>
                                    <div class="blog-more text-uppercase">
                                        <a href="blog-single">Read More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Of Blog section
        ============================================= -->
</div>
@endsection
