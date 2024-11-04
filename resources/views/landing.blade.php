<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Three || Wostin || Wostin HTML Template For Business </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Wostin HTML Template For Business">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">



    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/custom-animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/jquery.magnific-popup.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/nouislider.pips.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tiny-slider.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/timePicker.css">

    <!-- template styles -->
    <link rel="stylesheet" href="css/wostin.css">
    <link rel="stylesheet" href="css/wostin-responsive.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="images/loader.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo">
                    <a href="{{ url('/') }}"><img src="images/logo-2.png" alt=""></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown">
                            <a href="{{ url('/') }}">Home</a>
                              
                            </li>
                            <li>
                                <a href="about.html">Blogs</a>
                            </li>
                            <li class="dropdown megamenu">
    <a href="#services-section">Our Services</a>
</li>

                            <li class="dropdown">
                                <a href="#feedbacks">Feedbacks</a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="#members">Members</a>
                               
                            </li>
                            <li><a href="#carousel-section">News</a></li>
                            <li><a href="#footer">Contact</a></li>
                        </ul>
                        <div class="main-menu-three__right">
    @if (Auth::check())
        <!-- Si l'utilisateur est connecté -->
        <li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="thp-btn" style="background: none; border: none; color: white;">
                    <img src="images/logout-icon.svg" class="me-1" alt="icon"> Logout
                </button>
            </form>
        </li>
    @else
        <!-- Si l'utilisateur n'est pas connecté -->
        <li><a href="/register" class="thp-btn"><img src="images/reg-icon.svg" class="me-1" alt="icon"> Register</a></li>
        <li class="main-menu-three__call-number">
            <a href="/login">
                <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.52381 16.9033C1.10476 16.9033 0.746159 16.7542 0.448 16.4561C0.149333 16.1574 0 15.7986 0 15.3795V7.76046C0 7.34142 0.149333 6.98256 0.448 6.68389C0.746159 6.38573 1.10476 6.23665 1.52381 6.23665H2.28571V4.71284C2.28571 3.65888 2.65727 2.76034 3.40038 2.01723C4.14298 1.27462 5.04127 0.90332 6.09524 0.90332C7.14921 0.90332 8.04775 1.27462 8.79086 2.01723C9.53346 2.76034 9.90476 3.65888 9.90476 4.71284V6.23665H10.6667C11.0857 6.23665 11.4446 6.38573 11.7432 6.68389C12.0414 6.98256 12.1905 7.34142 12.1905 7.76046V15.3795C12.1905 15.7986 12.0414 16.1574 11.7432 16.4561C11.4446 16.7542 11.0857 16.9033 10.6667 16.9033H1.52381ZM1.52381 15.3795H10.6667V7.76046H1.52381V15.3795ZM6.09524 13.0938C6.51429 13.0938 6.87314 12.9447 7.17181 12.6466C7.46997 12.3479 7.61905 11.989 7.61905 11.57C7.61905 11.1509 7.46997 10.7921 7.17181 10.4934C6.87314 10.1953 6.51429 10.0462 6.09524 10.0462C5.67619 10.0462 5.31759 10.1953 5.01943 10.4934C4.72076 10.7921 4.57143 11.1509 4.57143 11.57C4.57143 11.989 4.72076 12.3479 5.01943 12.6466C5.31759 12.9447 5.67619 13.0938 6.09524 13.0938ZM3.80952 6.23665H8.38095V4.71284C8.38095 4.07792 8.15873 3.53824 7.71429 3.0938C7.26984 2.64935 6.73016 2.42713 6.09524 2.42713C5.46032 2.42713 4.92064 2.64935 4.47619 3.0938C4.03175 3.53824 3.80952 4.07792 3.80952 4.71284V6.23665ZM1.52381 15.3795V7.76046V15.3795Z" fill="white"/>
                </svg>
                Login
            </a>
        </li>
    @endif
</div>

                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider main-slider-three">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": false,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }
}'>

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider-three-bg" style="background-image: url(images/main-slider-3-bg.jpg);">
                        </div>
                        <div class="main-slider-three-bg-two"></div>
                        <div class="main-slider-three-building"><img src="images/main-slider-three-building.png" alt=""></div>
                        <div class="main-slider-three-car"><img src="images/main-slider-three-car.png" alt="" class="float-bob-y"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content">
                                        <h2>Reliable <br> &amp; Affordable <br> Waste Services</h2>
                                        <a href="request-pickup.html" class="thm-btn">Request a Pickup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->

        <!--Services Two Start-->
        <section id="services-section" class="services-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We’re Offering</span>
                    <h2 class="section-title__title">The Services We’re Providing</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg" style="background-image: url(images/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="images/services-2-icon-1.png" alt="">
                                </div>


                                <div class="services-two__content">
    <h3 class="services-two__title">
        <a href="{{ url('/planning') }}">PlanningCollecte & </a>
  
   
        <a href="{{ url('/equipement') }}">EquipementCollecte</a>
    </h3>
    <p class="services-two__text">Lorem ipsum dolor sit amet, adipelit do.</p>
</div>



                                <span>Read More</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single mart-30">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg" style="background-image: url(images/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="images/services-2-icon-2.png" alt="">
                                </div>
                                <div class="services-two__content">
                                <h3 class="services-two__title">
                                    <a href="{{ url('/dechets') }}">Déchet - ZoneCollecte</a>
                                </h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, adipelit do.</p>
                            </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="dumpster-rental.html">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single mart-30">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg" style="background-image: url(images/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="images/services-2-icon-2.png" alt="">
                                </div>
                                <div class="services-two__content">
                                <h3 class="services-two__title"><a href="{{ route('campagnes.index') }}">CampagneSensibilisation - Avis</a></h3>
                                </a></h3>
                                    <p class="services-two__text">Lorem ipsum dolor sit amet, adipelit do.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="dumpster-rental.html">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg" style="background-image: url(images/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="images/services-2-icon-3.png" alt="">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title"><a href="collecte-evenements">CollectEvenement- Rapport</a>
                                    </h3>
                                    <p class="services-two__text">Lorem ipsum dolor sit amet, adipelit do.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="collecte-evenements">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single mart-30">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg" style="background-image: url(images/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="images/services-2-icon-4.png" alt="">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title">     <a href="{{ url('/centre-recyclage') }}">CentreRecyclage - Reclamation</a></h3>
                                    <p class="services-two__text">Lorem ipsum dolor sit amet, adipelit do.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="{{ url('/centre-recyclage') }}">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <!--Welcome Start-->
        <section class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome__left">
                            <div class="welcome__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="welcome__img">
                                    <img src="images/welcome-img-1.jpg" alt="">
                                </div>
                                <div class="welcome__icon">
                                    <span class="icon-garbage"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Welcome to Waste Pickup Company</span>
                                <h2 class="section-title__title">We’ve Been Working Since 1987 in this Field</h2>
                            </div>
                            <p class="welcome__text-1">Aenean sed sapien venenatis, blandit nulla in, lacinia risus.
                                Suspendisse potenti.</p>
                            <p class="welcome__text-2">There are many variations of passages of psum available, but the
                                majority have suffered alteration in some form, by injected humour, or randomised words.
                            </p>
                            <ul class="list-unstyled welcome__bottom">
                                <li>
                                    <div class="welcome__count"></div>
                                    <div class="welcome__content">
                                        <h3>Going Above <br> and Beyond</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="welcome__count"></div>
                                    <div class="welcome__content">
                                        <h3>Committed to <br> People First</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome End-->

        <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="why-choose-two-bg" style="background-image: url(images/why-choose-two-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Why Choose Us?</span>
                                <h2 class="section-title__title">We Make Sure your Waste Goes to the Right Place</h2>
                            </div>
                            <p class="why-choose-two__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__right">
                            <ul class="list-unstyled why-choose-two__counter">
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-waste"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <h2 class="odometer" data-count="4850">00</h2><span class="counter-two__plus">+</span>
                                        <p class="why-choose-two__counter-text">Waste Picked &amp; Dispose </p>
                                    </div>
                                </li>
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="200ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-success"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <h2 class="odometer" data-count="99.9">00</h2><span class="counter-two__plus">%</span>
                                        <p class="why-choose-two__counter-text">Our Company is Successful</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="300ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-affection"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <h2 class="odometer" data-count="20660">00</h2><span class="counter-two__plus">+</span>
                                        <p class="why-choose-two__counter-text">Satisfied &amp; Happy People</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End-->

        <!--Manage Waste Two Start-->
        <section class="manage-waste manage-waste-two">
            <div class="manage-waste-bg-box">
                <div class="manage-waste-bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: url(images/manage-waste-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="manage-waste__inner">
                            <h3 class="manage-waste__title">Manage Waste Effectively <br> and Reduce Environmental
                                Impact</h3>
                            <div class="manage-waste__btn-box">
                                <a href="request-pickup.html" class="thm-btn manage-waste__btn-1">Request a Pickup</a>
                                <a href="contact.html" class="thm-btn manage-waste__btn-2">Contact With us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Manage Waste Two End-->

        <!--Project Three Start-->
        <section class="project-three">
            <div class="container">
                <div class="project-three__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="project-three__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Recent Closed Projects</span>
                                    <h2 class="section-title__title">Recently Completed Projects</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="project-three__right">
                                <p class="project-three__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud
                                    exercitation ullamco laboris.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-three__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img">
                                    <img src="images/project-3-1.jpg" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="project-details.html"><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                        <p class="project-three__subtitle">Waste Pickup</p>
                                        <h3 class="project-three__title"><a href="project-details.html">Grocery Waste
                                                Removal</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img">
                                    <img src="images/project-3-2.jpg" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="project-details.html"><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                        <p class="project-three__subtitle">Waste Pickup</p>
                                        <h3 class="project-three__title"><a href="project-details.html">Home Trash
                                                Picked</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img">
                                    <img src="images/project-3-3.jpg" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="project-details.html"><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                        <p class="project-three__subtitle">Waste Pickup</p>
                                        <h3 class="project-three__title"><a href="project-details.html">Construction
                                                Collection</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Three End-->

        <!--Pricing Start-->
        <section class="pricing">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Pricing Plans</span>
                    <h2 class="section-title__title">Offering Best Pricing</h2>
                </div>
                <div class="pricing__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#bagster" class="tab-btn"><span>Bagster</span></li>
                        <li data-tab="#containers" class="tab-btn active-btn"><span>Containers</span></li>
                        <li data-tab="#dumpster" class="tab-btn"><span>Dumpster</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="bagster">
                            <div class="tabs-content__inner">
                                <div class="pricing__tab-content-box">
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/bagster-1-1.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">House Use Bags</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>1,300 lbs</span></li>
                                                    <li>Thickness: <span>4’ x 8’, ½” thick</span></li>
                                                    <li>Best Use: <span>Home trash &amp; waste</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>20.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/bagster-1-1.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">Compact Bags</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>2,300 lbs</span></li>
                                                    <li>Thickness: <span>4’ x 8’, ½” thick</span></li>
                                                    <li>Best Use: <span>Small materials</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>30.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/bagster-1-1.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">Small but Mighty Bags</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>3,300 lbs</span></li>
                                                    <li>Thickness: <span>4’ x 8’, ½” thick</span></li>
                                                    <li>Best Use: <span>Heavy materials</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>40.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="containers">
                            <div class="tabs-content__inner">
                                <div class="pricing__tab-content-box">
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/container-1-1.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">32 Gallon Trash Container</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>2 Trash bags</span></li>
                                                    <li>Serves: <span>1-2 people</span></li>
                                                    <li>Max Weight: <span>Approx 18kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>20.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/container-1-2.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">64 Gallon Trash Container</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>3 Trash bags</span></li>
                                                    <li>Serves: <span>4-6 people</span></li>
                                                    <li>Max Weight: <span>Approx 30kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>35.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/container-1-3.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">76 Gallon Trash Container</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>7 Trash bags</span></li>
                                                    <li>Serves: <span>5-7 people</span></li>
                                                    <li>Max Weight: <span>Approx 60kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>50.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="dumpster">
                            <div class="tabs-content__inner">
                                <div class="pricing__tab-content-box">
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/dump-1-1.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">10 Yard Roll-Off Dumpster
                                                </h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>4 pickup loads</span></li>
                                                    <li>Dimensions: <span>15'0"L x 8'0"W x 2'0"H</span></li>
                                                    <li>Best Use: <span>Heavy materials</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>20.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/dump-1-2.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">12 Yard Roll-Off Dumpster</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>5 pickup loads</span></li>
                                                    <li>Dimensions: <span>10' - 12'0"L x 8'0"W x 3'5"H</span></li>
                                                    <li>Best Use: <span>Heavy materials</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>30.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            <div class="pricing__tab-content-img">
                                                <img src="images/dump-1-3.png" alt="">
                                            </div>
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">15 Yard Roll-Off Dumpster</h3>
                                                <ul class="list-unstyled pricing__tab-content-list">
                                                    <li>Holds: <span>6 pickup loads</span></li>
                                                    <li>Dimensions: <span>10'0"L x 7'11"W x 4'7"H</span></li>
                                                    <li>Best Use: <span>Heavy materials</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <p class="pricing__tab-content-rate"><span>$</span>50.00</p>
                                                <a href="contact.html" class="thm-btn pricing__order-btn">Order Now</a>
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
        <!--Pricing End-->

        <!--Testimonial Three Start-->
        <section id="feedbacks" class="testimonial-three">
            <div class="testimonial-three-bg" style="background-image: url(images/testimonial-three-bg.jpg);"></div>
            <div class="testimonial-three-bg-2" style="background-image: url(images/testimonial-three-bg-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="testimonial-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Customers Feedbacks</span>
                                <h2 class="section-title__title">What Our Customers Are Talking</h2>
                            </div>
                            <div class="testimonial-three__carousel owl-theme owl-carousel thm-owl__carousel" data-owl-options='{
    "loop": true,
    "autoplay": true,
    "margin": 30,
    "nav": false,
    "dots": true,
    "smartspeed": 500,
    "autoplayTimeout": 10000,
    "navText": ["<span class=\"fa fa-angle-left\"></span>", "<span class=\"fa fa-angle-right\"></span>"],
    "responsive": {
        "0": {
            "items": 1
        },
        "768": {
            "items": 1
        },
        "1200": {
            "items": 1
        }
    }
}'>
    <!--Testimonial One Single-->
</div>

                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Great job and fair pricing</h3>
                                    </div>
                                    <p class="testimonial-three__text">Proin a lacus arcu. Nullam id dui eu orci
                                        maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad
                                        litora torquent per conubia nostra.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="images/testimonial-3-1.jpg" alt="">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Jessica Brown</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Great job and fair pricing</h3>
                                    </div>
                                    <p class="testimonial-three__text">Proin a lacus arcu. Nullam id dui eu orci
                                        maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad
                                        litora torquent per conubia nostra.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="images/testimonial-3-2.jpg" alt="">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Great job and fair pricing</h3>
                                    </div>
                                    <p class="testimonial-three__text">Proin a lacus arcu. Nullam id dui eu orci
                                        maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad
                                        litora torquent per conubia nostra.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="images/testimonial-3-3.jpg" alt="">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Mike Hardson</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

        <!--Team One Start-->
        <section id="members"class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Team Behind Success</span>
                    <h2 class="section-title__title">Expert Staff &amp; Members</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Team One Single-->
                        <div class="team-one__sngle">
                            <div class="team-one__img">
                                <img src="images/emna.jpg" width="130" height="380"alt="">
                                <div class="team-one__shape">
                                    <img src="images/team-one-shape.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__title">Accountant</p>
                                <h3 class="team-one__name">Emna Felfel</h3>
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-one__arrow">
                                        <a href="staff-details.html"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Team One Single-->
                        <div class="team-one__sngle">
                            <div class="team-one__img">
                                <img src="images/feriel.png" width="130" height="380" alt="">
                                <div class="team-one__shape">
                                    <img src="images/team-one-shape.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__title">Accountant</p>
                                <h3 class="team-one__name">Feriel Belhajkacem</h3>
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-one__arrow">
                                        <a href="staff-details.html"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Team One Single-->
                        <div class="team-one__sngle">
                            <div class="team-one__img">
                                <img src="images/ghofrane.jpg" width="130" height="380" alt="">
                                <div class="team-one__shape">
                                    <img src="images/team-one-shape.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__title">Accountant</p>
                                <h3 class="team-one__name">Ghofrane Talbi </h3>
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-one__arrow">
                                        <a href="staff-details.html"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Team One Single-->
                        <div class="team-one__sngle">
                            <div class="team-one__img">
                                <img src="images/arij.jpg" width="150" height="380" alt="">
                                <div class="team-one__shape">
                                    <img src="images/team-one-shape.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__title">Co Founder</p>
                                <h3 class="team-one__name">Arij Nabli</h3>
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-one__arrow">
                                        <a href="staff-details.html"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Team One Single-->
                        <div class="team-one__sngle">
                            <div class="team-one__img">
                                <img src="images/arwa.jpg" alt="">
                                <div class="team-one__shape">
                                    <img src="images/team-one-shape.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__title">Senior Assistant</p>
                                <h3 class="team-one__name">Arwa Boughataya</h3>
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="team-one__arrow">
                                        <a href="staff-details.html"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Working Process Start-->
        <section class="working-process">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">4 Simple Steps</span>
                    <h2 class="section-title__title">Our Working Process</h2>
                </div>
                <ul class="list-unstyled working-process__box">
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage-truck"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="images/working-process-shape.png" alt="">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="images/working-process-hover-shape.png" alt="">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg" style="background-image: url(images/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="about.html">Pickup</a></h3>
                        <p class="working-process__text">Lorem Ipsum is simply text of the new design print and type.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="images/working-process-shape.png" alt="">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="images/working-process-hover-shape.png" alt="">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg" style="background-image: url(images/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="about.html">Collection</a></h3>
                        <p class="working-process__text">Lorem Ipsum is simply text of the new design print and type.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-processing"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="images/working-process-shape.png" alt="">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="images/working-process-hover-shape.png" alt="">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg" style="background-image: url(images/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="about.html">Proccessing</a></h3>
                        <p class="working-process__text">Lorem Ipsum is simply text of the new design print and type.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage-truck"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="images/working-process-shape.png" alt="">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="images/working-process-hover-shape.png" alt="">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg" style="background-image: url(images/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="about.html">Disposed</a></h3>
                        <p class="working-process__text">Lorem Ipsum is simply text of the new design print and type.
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Working Process End-->

        <!--News Three Start-->
        <section id="carousel-section" class="news-three ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="news-three__left">
                            <div class="news-three__bg-box">
                                <div class="news-three__bg" style="background-image: url(images/news-three-bg.jpg);"></div>
                            </div>
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What’s Happening</span>
                                <h2 class="section-title__title">Our Latest News &amp; Articles</h2>
                            </div>
                            <p class="news-three__text">Lorem ipsum dolor sit consectetur adipisicing elit sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="news-three__right">
                        <div class="news-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": true,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 10000,
            "navText": ["<span class=\"icon-left-arrow\"></span>", "<span class=\"icon-right-arrow\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 1
                },
                "992": {
                    "items": 2
                },
                "1200": {
                    "items": 2.01
                }
            }
        }'>
            <!--News One Single-->
      
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="images/news-1-1.jpg" alt="">
                                        <div class="news-one__date">
                                            <p>20 Dec</p>
                                        </div>
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-clock"></i> by Admin </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Waste Management
                                                Container or Bin for my Home?</a></h3>
                                        <div class="news-one__read-more">
                                            <a href="news-details.html"><i class="fa fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--News One Single-->
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="images/news-1-2.jpg" alt="">
                                        <div class="news-one__date">
                                            <p>20 Dec</p>
                                        </div>
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-clock"></i> by Admin </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Leverage agile
                                                frameworks to provide best service</a></h3>
                                        <div class="news-one__read-more">
                                            <a href="news-details.html"><i class="fa fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--News One Single-->
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="images/news-1-3.jpg" alt="">
                                        <div class="news-one__date">
                                            <p>20 Dec</p>
                                        </div>
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-clock"></i> by Admin </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Bring to the table
                                                win-win survival strategis to identify</a></h3>
                                        <div class="news-one__read-more">
                                            <a href="news-details.html"><i class="fa fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Three End-->

        <!--Brand One Start-->
        <section class="brand-one brand-three">
            <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
    "spaceBetween": 100,
    "slidesPerView": 5,
    "autoplay": {
        "delay": 5000
    },
    "breakpoints": {
        "0": {
            "spaceBetween": 30
        },
        "375": {
            "spaceBetween": 30
        },
        "575": {
            "spaceBetween": 50
        },
        "767": {
            "spaceBetween": 50
        },
        "991": {
            "spaceBetween": 100
        },
        "1199": {
            "spaceBetween": 100
        }
    }
}'>
    <!-- Your swiper content goes here -->


                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <img src="images/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="images/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Site Footer Start-->
        <footer class="site-footer" id="footer">
            <div class="site-footer-bg" style="background-image: url(images/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-logo">
                            <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
                        </div>
                        <div class="site-footer__top-right">
                            <p class="site-footer__top-right-text">Waste Disposal Management &amp; Pickup Services</p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">About</h3>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Lorem ipsum dolor sited ame etur adi pisicing
                                        elit tempor labore.</p>
                                </div>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="request-pickup.html">Request Pickup</a></li>
                                    <li><a href="about.html">Management</a></li>
                                    <li><a href="services.html">Start Service</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__services clearfix">
                                <h3 class="footer-widget__title">Services</h3>
                                <ul class="footer-widget__services-list list-unstyled clearfix">
                                    <li><a href="dumpster-rental.html">Dumpster Rentals</a></li>
                                    <li><a href="about.html">Bulk Trash Pickup</a></li>
                                    <li><a href="about.html">Waste Removal</a></li>
                                    <li><a href="zero-waste.html">Zero Waste</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">880 Broklyn Road Street, New Town DC 5002, New
                                    York. USA</p>
                                <div class="footer-widget__contact-info">
                                    <div class="footer-widget__contact-icon">
                                        <span class="icon-contact"></span>
                                    </div>
                                    <div class="footer-widget__contact-content">
                                        <p class="footer-widget__contact-mail-phone">
                                            <a href="mailto:needhelp@wostin.com" class="footer-widget__contact-mail">needhelp@wostin.com</a>
                                            <a href="tel:2463330088" class="footer-widget__contact-phone">51 277 814</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer-bottom-shape" style="background-image: url(images/site-footer-bottom-shape.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2022 by <a href="#">Layerdrops.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="images/footer-logo.png" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@wostin.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:51-277-814">51 277 814</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/tiny-slider.min.js"></script>
    <script src="js/wNumb.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/countdown.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/timePicker.js"></script>




    <!-- template js -->
    <script src="js/wostin.js"></script>


</body></html>