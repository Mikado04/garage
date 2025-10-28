<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Optional: Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #f8f9fa;
        }
        header.navbar {
            padding: 1rem 2rem;
        }
        header h1 {
            margin: 0;
            font-size: 1.75rem;
        }
        img.hero {
            width: 100%;
            height: auto;
            border-radius: .5rem;
            margin-top: 2rem;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                MikoGarage
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                @if (Route::has('login'))
                    <nav class="navbar-nav">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-light me-2">
                                <i class="bi bi-speedometer2"></i> Tableau de bord
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light me-2">
                                <i class="bi bi-box-arrow-in-right"></i> Se connecter
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-dark">
                                    <i class="bi bi-calendar-check"></i> Rendez-vous
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="container my-4">
        @yield('content')

        <!-- Exemple d’image de couverture -->
        <div class="text-center">
            <img src="{{ asset('assets/img/585a418a48ccbb01788256ec1900723f.jpg') }}" 
                 alt="Garage Miko" 
                 class="hero shadow-sm">
        </div>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
