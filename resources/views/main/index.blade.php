@extends('layouts.app')

@section('content')
<p>This is Home Page.</p>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="login">Login</a></li>
    <li><a href="register">Register</a></li>
</ul>
@endsection