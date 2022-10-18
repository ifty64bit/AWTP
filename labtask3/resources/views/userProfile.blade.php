@extends('layouts.app')
@section('title','Profile')
@section('body')
<div>
    <p>Name: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
</div>
@endsection