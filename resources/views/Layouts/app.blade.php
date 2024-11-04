<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
<<<<<<< HEAD
    </body>
=======
        
        <!-- JS files -->
        <script src="{{ asset('Assets/Admin/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/js/feather.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/plugins/datatables/datatables.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="{{ asset('Assets/Admin/js/script.js') }}"></script>
        
    </div>
</body>
>>>>>>> PlanningCollecte-EquipementCollecte
</html>
