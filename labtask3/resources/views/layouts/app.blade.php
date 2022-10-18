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
            @if(session()->get('name'))
                <li><a href="{{route('userProfile')}}">Profile</a></li>
                <li><a href="{{route('userEdit')}}">Edit</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            @else
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('registration')}}">Registration</a></li>
            @endif
                <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>
    <div>
        @yield('body')
    </div>
</body>
</html>