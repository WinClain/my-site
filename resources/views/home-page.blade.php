@extends('layouts.html')

@section('title')
home-page
@endsection

@section('navbar-buttons')

    <div class="about-me-button navbar-button mr-4" id="about-me-button">
        <span>about me</span>
    </div>
    <div class="navbar-button auth-links ">
        <span class="login-hidden-button">login</span>
        <ul>
            <li><a href="{{ route('register')}}">register</a></li>
            <li><a href="{{ route('login')}}">login</a></li>
        </ul>
    </div>    

@endsection

@section('content')
    <div class="container">
        
    </div>
    
@endsection