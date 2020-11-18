<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\users;
use Auth;

class AuthController extends Controller
{
    public function register_page(){
        $body = "body-auth dark-theme";
        return view('register')->with('body',$body);
    }

    public function submit_register(AuthRequest $request){
        $boddy = "class='body-welcome dark-theme'";
        
        $user = new users();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();
       return view('home-page');
    }






    public function login_page(){
        $body = "body-auth dark-theme";
        return view('login')->with('body',$body);
    }


    public function submit_login(){
        
    }

    
}
