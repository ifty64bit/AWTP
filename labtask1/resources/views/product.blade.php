@extends('layouts.app')
@section('body')
<div>
    Our product list
    <ul>
        @foreach ($names as $name)
        <li>
            {{ $name }}
        </li>
        @endforeach
    </ul>
</div>
@endsection
