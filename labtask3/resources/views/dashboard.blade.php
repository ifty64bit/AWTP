@extends('layouts.app')
@section('title','Dashboard')
@section('body')
<div>
    <p>Name: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
</div>
@endsection