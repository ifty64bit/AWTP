<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('registration')}}">Registration</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>
    <div>
        @yield('body')
    </div>
</body>
</html>