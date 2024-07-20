<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIBESID | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')
</head>

<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>
    <footer class="footer mt-auto py-3 bg-white">
        <div class="container">
            <span class="text-muted">© 2024 | VIBES.ID - DIBUAT OLEH RISKA DAN PESTA</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Custom scripts -->
    <script>
    </script>
    @yield('scripts')
</body>

</html>
