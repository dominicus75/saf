<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAF | @yield('title', '')</title>
    <style>

    </style>
</head>
<body>
<header>
    <a href="/"><img src="/img/logo.png" alt="logo"></a>
    <p>Student Administration Framework</p>
</header>
@yield('main')
<footer>
    <p>&copy; New-Western High School, 2021.</p>
</footer>
</body>
</html>
