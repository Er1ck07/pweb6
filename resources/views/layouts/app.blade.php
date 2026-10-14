<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rice Bites - Makan Enak Ga Pake Ribet')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Vite CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="onibite-body">

    <!-- Navbar -->
    <nav class="onibite-navbar">
        <a href="/" class="onibite-logo-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Rice Bites Logo" class="onibite-logo-img">
            <span>Rice Bites</span>
        </a>
        <div class="onibite-nav-links">
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/menu" class="{{ request()->is('menu') ? 'active' : '' }}">Menu</a>
            <a href="/order" class="onibite-btn-primary">Order Now</a>
        </div>
    </nav>

    <!-- Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="onibite-footer">
        <p>© {{ date('Y') }} Rice Bites. Makan Enak Ga Pake Ribet.</p>
    </footer>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="onibite-toast-container"></div>

</body>
</html>