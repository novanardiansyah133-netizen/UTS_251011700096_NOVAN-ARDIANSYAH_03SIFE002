<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PEDALGO Rental Sepeda')</title>

    <!-- Bootstrap CSS lokal -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <!-- CSS utama PEDALGO -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                PEDALGO
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka menu navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bikes.index') }}">
                            Daftar Sepeda
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten halaman -->
    @yield('content')

    <!-- Footer -->
    <footer class="text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">
                &copy; {{ date('Y') }} PEDALGO Rental Sepeda.
                Semua hak dilindungi.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
