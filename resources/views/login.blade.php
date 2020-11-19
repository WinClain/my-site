@extends('layouts.html')



@section('title')
login
@endsection

@section('navbar-buttons')
   <div class="home-button">
      <a href="{{route('home')}}">home</a>
   </div>
@endsection

@section('content')
          
   
            <form action="/login/submit" method="post" class="form-auth">
               <h3>login</h3>

               @csrf

                  @if ($errors->any())
                    <div class=" alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                      
                  @endif

               <div class="input-div">
                  <input type="text" name="email" id="email" required>
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