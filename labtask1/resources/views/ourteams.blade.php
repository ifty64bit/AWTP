@extends('layouts.app')
@section('body')
<div>
    Our Team Members
    <ul>
        @foreach ($names as $name)
        <li>{{ $name }}</li>
        @endforeach
    </ul>
</div>
@endsection
