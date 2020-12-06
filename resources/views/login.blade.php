@extends('layouts.html')



@section('title')
login
@endsection

@section('navbar-buttons')
   <div class="navbar-button">
      <a href="{{route('home')}}">Главная</a>
   </div>
   <div class="navbar-button">
      <a href="{{route('register')}}">Регистрация</a>
   </div>
@endsection

@section('content')
          
   
            <form action="/login" method="post" class="form-auth">
               <h3>авторизация</h3>

               @csrf

                 @include('layouts.alert')

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