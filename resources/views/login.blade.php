@extends('layouts.html')



@section('title')
login
@endsection

@section('navbar-buttons')
   <div class="navbar-button">
      <a href="{{route('home')}}">главная</a>
   </div>
   <div class="navbar-button">
      <a href="{{route('register')}}">регистрация</a>
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

               <div class="input-div">
                  <input class="input-password" type="password" name="password" id="password" required>
                  <label for="password">пароль</label>
               </div>

               <div class="check-boxs">
                  <label><input type="checkbox" id="show-password">показать пароль</label>
                  <label><input type="checkbox" id="show-password" name="remember">запомнить меня</label>
               </div>
               
               <button type="submit" class="submit-button">отправить</button>
         </form>
      

   
@endsection