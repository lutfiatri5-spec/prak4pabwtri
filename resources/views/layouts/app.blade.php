<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir')</title>
    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('laporan.form') }}" class="brand">
            <span class="brand-icon">🚨</span>
            <span>LaporBanjir</span>
        </a>

        <nav>
            <a href="{{ route('laporan.form') }}">Form Laporan</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} LaporBanjir - BPBD Kabupaten Bandung</p>
    </footer>
</body>
</html>
