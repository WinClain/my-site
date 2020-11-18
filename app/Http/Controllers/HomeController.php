<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_page(){
        $body = 'body-home dark-theme';
        return view('home-page')->with('body',$body);
    }
}
