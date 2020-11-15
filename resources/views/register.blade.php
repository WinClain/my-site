@extends('html')



@section('title')
register
@endsection



@section('boddy-class')
    class='body-welcome dark-theme'
@endsection

@section('content')
          
   
            <form action="/register/submit" method="post" class="form-auth">
               <h3>register</h3>

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

               <div class="input-div  input-100">
                    <div class="input-name">
                      <input type="text" name="name" id="name" required>
                      <label for="name"> name</label>
                    </div>
                    <div class="input-name">
                      <input type="text" name="lastname" id="lastname" required>
                      <label for="lastname">lastname</label>
                    </div> 
                  
               </div>

               <div class="input-div">
                  <input type="text" name="email" id="email" required>
                  <label for="email">email</label>
               </div>

               <div class="input-div">
                  <input class="input-password" type="password" name="password" id="password" required>
                  <label for="password">password</label>
               </div>
               <label><input type="checkbox" id="show-password">show password</label>
               
            <input type="submit" value="submit">
         </form>
      

   
@endsection