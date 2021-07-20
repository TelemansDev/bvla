<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bezpłatna aplikacja do nauki słówek w twojej przeglądarce">
    <meta name="keywords" content="bezpłatna, aplikacja, przedkądarkowa, do, nauki, słówek, słownictwa">
    <meta name="author" content="Adam Chabrzyk">
    <title>@yield('title', 'Przeglądarkowa aplikacja do nauki słówek')</title>
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="container-md py-5">
        @yield('content')
    </div>
</body>
</html>
