<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        Session()->put('name','wasim');  
       

        return view('welcome');
    }
    
    public function about(){
        return view('about');
    }
}
