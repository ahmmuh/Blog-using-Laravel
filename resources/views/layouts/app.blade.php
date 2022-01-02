<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Code Anytime</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Code Anytime
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Hem</a>
                        </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link text-white">Utbildning</a>
                        </li>

                         <li class="nav-item">
                            <a href="#" class="nav-link text-white">Om mig</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

        <header>

            <img src="" alt="header img"/>
            
        </header>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-white p-4">

            <p class="">Tel: 0734754392</p>
            <p>Copyright &copy; 2022 Code Anytime</p>
        </footer>

    </div>
</body>
</html>
