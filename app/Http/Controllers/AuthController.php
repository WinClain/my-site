<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use App\Models\users;
use Auth;

class AuthController extends Controller
{
    public function register_page(){
        $body = "body-auth";
        return view('register')->with('body',$body);
    }

    public function submit_register(loginRequest $req){
        
        $user = new users();
        $user->name = $req->input('name');
        $user->lastname = $req->input('lastname');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password'));

        $user->save();
        
        return redirect()->route('login');
    }






    public function login_page(){
        $body = "body-auth";
        return view('login')->with('body',$body);
    }


    public function submit_login(LoginRequest $req){
       if(!Auth::attempt( $req->only(['email','password']))){
            return redirect()->back()->with('error', 'Неверный логин или пароль');
       }

       return redirect()->route('home')->with('success', 'Вы авторизовались');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    
}
