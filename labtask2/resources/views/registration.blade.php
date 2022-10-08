@extends('layouts.app')
@section('title', "Registration")
@section('body')
    <form action="" method="post">
        {{ csrf_field() }}
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="submit" value="Register">
        </div>
    </form>
@endsection