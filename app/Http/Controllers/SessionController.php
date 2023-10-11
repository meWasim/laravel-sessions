<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        Session()->put('name','wasim');
        Session()->put('age','[20,22,24]') ;
       

        return view('welcome');
    }
    
    public function about(){
       $ss= Session()->get('age');
       if(isset($ss)){
        return $ss;
       }
        return view('about');
    }
}
