@extends('layouts.app')
@section('title','Edit User')
@section('body')
<form action="" method="post">
    {{ csrf_field() }}
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{empty(old('email'))?$user->email : old('email')}}">
        @error('email')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{empty(old('name'))?$user->name : old('name')}}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Update">
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