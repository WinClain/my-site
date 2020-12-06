@extends('layouts.html')


@section('title')
register
@endsection

@section('navbar-buttons')
   <div class="navbar-button">
      <a href="{{route('home')}}">Главная</a>
   </div>
   <div class="navbar-button">
      <a href="{{route('login')}}">Войти</a>
   </div>
@endsection

@section('content')
          
   
            <form action="/register" method="post" class="form-auth">
               <h3>регистрация</h3>

               @csrf

               @include('layouts.alert')

               <div class="input-div  input-100">
                    <div class="input-name">
                      <input type="text" name="name" id="name" required value="{{ Request::old('name') ?: '' }}">
                      <label for="name">имя</label>
                    </div>
                    <div class="input-name">
                      <input type="text" name="lastname" id="lastname" required value="{{ Request::old('lastname') ?: '' }}">
                      <label for="lastname">фамилия</label>
                    </div> 
                  
               </div>

               <div class="input-div">
                  <input type="text" name="email" id="email" required value="{{ Request::old('email') ?: '' }}">
                  <label for="email">email</label>
               </div>

               <div class="input-div input-100 password-hidden" id="password-div">
                  <div class="div-input-password">
                     <input class="input-password" type="password" name="password" id="password" required>
                     <label for="password">пароль</label>
                  </div>
                  <img src="" id="show-password" alt="показать пароль">
               </div>
               
            
            <button type="submit" class="submit-button">отправить</button>
         </form>
      

   
@endsection