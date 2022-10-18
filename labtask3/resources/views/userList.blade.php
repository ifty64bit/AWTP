@extends('layouts.app')
@section('title', 'User List')
@section('body')
@foreach ($users as $user)
<table>
    <thead>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="#"><button>Edit</button></a>
                <a href="#"><button>Delete</button></a>
            </td>
        </tr>
    </tbody>
</table>
@endforeach
@endsection