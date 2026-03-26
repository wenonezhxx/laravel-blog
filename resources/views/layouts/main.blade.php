<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Моя галерея')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>@yield('header-title')</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>