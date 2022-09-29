<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FooBar Company</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('products')}}">Our Products</a></li>
            <li><a href="{{route('our-team')}}">Our Team</a></li>
            <li><a href="{{route('about-us')}}">About Us</a></li>
            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
        </ul>
    </div>
    @yield('body')
</body>
</html>
