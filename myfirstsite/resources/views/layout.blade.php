<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default')</title>
</head>
<body>

    <ul>
        <li><a href="/">Welcome</a></li>
        <li><a href="/contact">Contact Us</a> </li>
        <li><a href="/about">About Us</a></li>
    </ul>

    @yield('content')
</body>
</html>