@section('title', "Login")
@extends('layouts.app')
@section('body')
<div>
    <form action="" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{old('password')}}">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @if (isset($err))
        <p>{{$err}}</p>
    @endif
</div>
@endsection
