<header id="bi-header" class="bi-header-section header-style-two">
    <div class="bi-header-content">
        <div class="bi-header-logo-main-menu d-flex align-items-center justify-content-between">
            <div class="brand-logo">
                <a href="#"><img src="{{asset('/')}}assets/img/logo/logo2.png" alt=""></a>
            </div>
            <div class="bi-header-main-navigation">
                <nav class="main-navigation clearfix ul-li" id="navbar-example3">
                    <ul id="main-nav" class="nav navbar-nav clearfix">
                        <li class="nav-item"><a class="nav-link {{request()->is('/')?'active':''}}" href="/index">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{request()->is('about-us')?'active':''}}" href="/about-us">About</a></li>
                        <li class="nav-item"><a class="nav-link {{request()->is('services')?'active':''}}" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link {{request()->is('portfolio')?'active':''}}" href="/portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link {{request()->is('contact-us')?'active':''}}" href="/contact-us">Contact Us</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#bi-testimonial-2">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link" href="#bi-blog-2">Blog</a></li> --}}
                    </ul>
                </nav>
            </div>
            <div class="bi-header-cta-btn-grp d-flex align-items-center">
                <div class="bi-header-search">
                    <button class="search-btn"><i class="far fa-search"></i></button>
                </div>
                <div class="cta-btn-info d-flex align-items-center">
                    <div class="inner-icon d-flex justify-content-center align-items-center">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="inner-text">
                        <span>Give us a call</span>
                        <a href="#">+234 80 3783 5670</a>
                    </div>
                </div>
                <div class="cta-btn-area">
                    <div class="bi-btn-2  bi-btn-area text-uppercase">
                        <a class="bi-btn-main  bi-btn-hover bi-btn-item" href="/contact-us">  <span></span> Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile_menu position-relative">
            <div class="mobile_menu_button open_mobile_menu">
                <i class="fal fa-bars"></i>
            </div>
            <div class="mobile_menu_wrap">
                <div class="mobile_menu_overlay open_mobile_menu"></div>
                <div class="mobile_menu_content">
                    <div class="mobile_menu_close open_mobile_menu">
                        <i class="fal fa-times"></i>
                    </div>
                    <div class="m-brand-logo">
                        <a href="%21.html#"><img src="{{asset('/')}}assets/img/logo/logo2.png" alt=""></a>
                    </div>
                    <div class="mobile-search-bar position-relative">
                        <form action="#">
                            <input type="text" name="search" placeholder="Keywords">
                            <button><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="nav navbar-nav clearfix">
                            <li class="nav-item"><a class="nav-link {{request()->is('/')?'active':''}}" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link {{request()->is('about-us')?'active':''}}" href="/about-us">About Us</a></li>
                            <li class="nav-item"><a class="nav-link {{request()->is('services')?'active':''}}" href="/services">Services</a></li>
                            <li class="nav-item"><a class="nav-link {{request()->is('portfolio')?'active':''}}" href="/portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link {{request()->is('contact-us')?'active':''}}" href="/contact-us">Contact Us</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#bi-testimonial-2">Testimonial</a></li>
                            <li class="nav-item"><a class="nav-link" href="#bi-blog-2">Blog</a></li> --}}
                        </ul>
                    </nav>
                    <div class="bi-mobile-header-social text-center">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fab fa-facebook"></i></a>
                        <a href="#"> <i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Mobile-Menu -->
        </div>
    </div>
</header>
