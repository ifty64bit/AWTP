@extends('layouts.app')
@section('title', "Registration")
@section('body')
    <form action="" method="post">
        {{ csrf_field() }}
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            @error('name')
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
            <input type="hidden" name="role" value="admin">
        </div>

        <div>
            <input type="submit" value="Register">
        </div>
    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection