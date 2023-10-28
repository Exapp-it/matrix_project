<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a class="logo" href="/">Закрытый клуб предпринимателей</a>
            <ul class="nav-list">
                <li><a href="/about">О клубе</a></li>
                <li><a href="/events">События</a></li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="/login">Вход</a></li>
                <li><a href="/register">Регистрация</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer class="footer">
        <p>&copy; 2023 Закрытый клуб предпринимателей</p>
    </footer>
</body>


</html>