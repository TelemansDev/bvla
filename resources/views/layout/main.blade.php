<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bezpłatna aplikacja do nauki słówek w twojej przeglądarce">
    <meta name="keywords" content="bezpłatna, aplikacja, przedkądarkowa, do, nauki, słówek, słownictwa">
    <meta name="author" content="Adam Chabrzyk">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <title>@yield('title', 'Przeglądarkowa aplikacja do nauki słówek')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>