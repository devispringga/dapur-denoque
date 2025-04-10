<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dapur Denoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/denoque_log_1.png') }}" alt="Logo Perusahaan" width="40" height="55">
                Dapur Denoque
            </a>

            <div class="d-flex">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-success">Registrasi</a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; Devis Pringga 23552012004 22PK
        <img src="{{ asset('assets/images/denoque_log_1.png') }}" alt="Logo Perusahaan" width="40" height="55">
    </footer>

</body>
</html>
