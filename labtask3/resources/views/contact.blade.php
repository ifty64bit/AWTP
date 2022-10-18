@extends('layouts.app')
@section('title','Contact')
@section('body')
<div>
    <h3>Welcome</h3>
    <p>Name: {{ session('name') }}</p>
    <p>Email: {{ session('email') }}</p>
    <p>Phone: {{ session('phone') }}</p>
    <p>Password: {{ session('password') }}</p>
</div>
@endsection