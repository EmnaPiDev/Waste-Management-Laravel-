<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Votre Application')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Custom styles -->
    @stack('styles')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('images/loader.png') }}" alt="Loading...">
    </div>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <!-- Logo -->
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

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer id="footer" class="bg-dark text-white py-4">
            <div class="container text-center">
                <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Terms of Service</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
