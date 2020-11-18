@extends('layouts.html')


@section('title')
register
@endsection



@section('content')
          
   
            <form action="/register/submit" method="post" class="form-auth">
               <h3>register</h3>

               @csrf

               @if ($errors->any())
                  <div class="alert--error-valid">
                     <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                     </ul>
                  </div>
               @endif

               <div class="input-div  input-100">
                    <div class="input-name">
                      <input type="text" name="name" id="name" required value="{{ Request::old('name') ?: '' }}">
                      <label for="name"> name</label>
                    </div>
                    <div class="input-name">
                      <input type="text" name="lastname" id="lastname" required value="{{ Request::old('lastname') ?: '' }}">
                      <label for="lastname">lastname</label>
                    </div> 
                  
               </div>

               <div class="input-div">
                  <input type="text" name="email" id="email" required value="{{ Request::old('email') ?: '' }}">
                  <label for="email">email</label>
               </div>

               <div class="input-div">
                  <input class="input-password" type="password" name="password" id="password" required>
                  <label for="password">password</label>
               </div>
               <label><input type="checkbox" id="show-password">show password</label>
               
            
            <button type="submit" class="submit-button">submit</button>
         </form>
      

   
@endsection