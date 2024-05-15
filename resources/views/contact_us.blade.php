@extends('pages.layout')

@section('content')


<!-- Start of breadcrumb section
	============================================= -->
	<section id="bi-breadcrumbs" class="bi-bredcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="bi-breadcrumbs-content headline ul-li text-center">
				<h2>Contact</h2>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
<!-- Start of breadcrumb section
	============================================= -->

<!-- Start of contact info section
	============================================= -->
	<section id="bi-contact-info" class="bi-contact-info-section inner-page-padding">
		<div class="container">
			<div class="bi-contact-info-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="bi-contact-info-item position-relative">
							<span class="info-bg position-absolute" data-background="assets/img/bg/ci-bg1.png"></span>
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<img src="assets/img/icon/ci2.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3>Email Address</h3>
								<a href="#">support@vicsystems.us</a>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="bi-contact-info-item position-relative">
							<span class="info-bg position-absolute" data-background="assets/img/bg/ci-bg1.png"></span>
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<img src="assets/img/icon/ci1.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3>Phone Number</h3>
								<a href="#">+234 803 783 5670</a>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="bi-contact-info-item position-relative">
							<span class="info-bg position-absolute" data-background="assets/img/bg/ci-bg1.png"></span>
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<img src="assets/img/icon/ci3.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3>Location / Address</h3>
								<a href="#">Plot 700 Jahi Olajide Laleye Street Off Babatope Ajaikaiye Street Jahi, Abuja, Nigeria	</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of contact info section
	============================================= -->

<!-- Start of contact Form section
	============================================= -->
    <section id="bi-contact-form" class="bi-contact-form-section">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-md-6">
                        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=05%20Babatope%20Ajakaiye%20Cres,%20AMAC,%20Abuja%20900108,%20Federal%20Capital%20Territory+(vicsystems%20technologies%20ltd.)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
                    </div>
                    <div class="col-md-6">

                <div class="bi-team-details-contact-info headline pera-content ">
                    <div class="bi-team-details-contact-title">
                        <div class="bi-section-title-1 headline pera-content">
                            <div class="bi-subtitle text-uppercase wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                                
                            </div>
                            <h2 class="headline-title">
                                Keep In Touch
                            </h2>
                        </div>
                        <p>In nec libero luctus, aliquet turpis at, vehicula nisi. Cras eget mauris in nisl tempus lobortis.</p>
                        <div class="bi-team-details-contact-form">
                            <form action="https://html.support@vicsystems.us/Haptic-Html/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="Email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone No.">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bi-submit-btn">
                                            <button type="submit">Send messages</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!-- End of  contact Form section
	============================================= -->

@endsection
