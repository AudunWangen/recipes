<!DOCTYPE html>
<html lang="no" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Oppskrifter</title>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>