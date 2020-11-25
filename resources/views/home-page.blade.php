@extends('layouts.html')

@section('title')
home-page
@endsection

@section('navbar-buttons')

    <div class="about-me-button navbar-button" id="about-me-button">
        <span>обо мне</span>
    </div>
    
        
            
        @if (Auth::check())
            <div class="name-lastname navbar-button">
                <span>{{ Auth::user()->getName() }}</span>
            </div>
        @else
        <div class="navbar-button auth-links ">
            <span class="login-hidden-button">логин</span>
            <ul>
                <li><a href="{{ route('register')}}">регистрация</a></li>
                <li><a href="{{ route('login')}}">войти</a></li>
            </ul>
        </div>  
        @endif
        
      

@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        
        <div class="card">

        </div>

        <div class="content">

        </div>
    </div>
    
@endsection