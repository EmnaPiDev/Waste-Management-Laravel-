<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home | Wostin')</title>
    
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">

    <!-- Meta description for SEO -->
    <meta name="description" content="@yield('meta_description', 'Wostin HTML Template For Business')">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wostin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wostin-responsive.css') }}">
    
    <!-- Include FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
</head>
<body>

<!-- Header -->
<header class="main-header">
    <nav class="navbar navbar-expand-lg" style="background-color:#558e4c;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo-2.png') }}" alt="Logo" />
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-section">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feedbacks">Feedbacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#members">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carousel-section">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content Section -->
<main class="mt-4 my5 mb-5">
    @yield('content') <!-- This is where specific page content will be injected -->
</main>

<!-- Footer -->
<footer class="site-footer mt-5" id="footer">

<div class="site-footer-bg" style="background-image: url('{{ asset('images/site-footer-bg.jpg') }}')"></div>

    <div class="site-footer-bg" style="background-image: url('{{ asset('images/site-footer-bg.jpg') }}')"></div>


    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__top-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/footer-logo.png') }}" alt="Footer Logo"></a>
                </div>
                <div class="site-footer__top-right">
                    <p class="site-footer__top-right-text">Waste Disposal Management & Pickup Services</p>
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__about">
                        <h3 class="footer-widget__title">About</h3>
                        <p class="footer-widget__about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email Address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/request-pickup') }}">Request Pickup</a></li>
                            <li><a href="{{ url('/management') }}">Management</a></li>
                            <li><a href="{{ url('/services') }}">Start Service</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__services clearfix">
                        <h3 class="footer-widget__title">Services</h3>
                        <ul class="footer-widget__services-list list-unstyled clearfix">
                            <li><a href="{{ url('/dumpster-rental') }}">Dumpster Rentals</a></li>
                            <li><a href="{{ url('/bulk-trash') }}">Bulk Trash Pickup</a></li>
                            <li><a href="{{ url('/waste-removal') }}">Waste Removal</a></li>
                            <li><a href="{{ url('/zero-waste') }}">Zero Waste</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <p class="footer-widget__contact-text">880 Brooklyn Road, New Town DC 5002, New York, USA</p>
                        <div class="footer-widget__contact-info">
                            <div class="footer-widget__contact-icon">
                                <span class="icon-contact"></span>
                            </div>
                            <div class="footer-widget__contact-content">
                                <p class="footer-widget__contact-mail-phone">
                                    <a href="mailto:needhelp@wostin.com">needhelp@wostin.com</a>
                                    <a href="tel:+51277814">+51 277 814</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">Copyright &copy; 2024 <a href="{{ url('/') }}">Wostin</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to top -->
<a href="#" id="scrollToTop"><i class="fa fa-angle-up"></i></a>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/wostin.js') }}"></script>

<!-- Include FullCalendar JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
            // You can add more options here
        });
        calendar.render();
    });
</script>

@yield('scripts') <!-- This is where additional page scripts will be injected -->
</body>
</html>
