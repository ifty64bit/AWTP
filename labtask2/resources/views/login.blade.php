@section('title', "Login")
@extends('layouts.app')
@section('body')
<div>
    <form action="" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</div>
@endsection
