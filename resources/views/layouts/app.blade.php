<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppskrifter</title>
</head>
<body>
    @include('layouts.header')

    <section id='content'>
        @yield('content')
    </section>
    
    @include('layouts.footer')
</body>
</html>