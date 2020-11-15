<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Models\registerModel;

class registerController extends Controller
{
    public function submit(registerRequest $request){
        
        $user = new registerModel();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();
       return view('home-page');
    }
}
