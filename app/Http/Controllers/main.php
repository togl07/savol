<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function asosiy(){
      return view('main');
    }
    public function about(){
      return view('about');
    }
    public function comps(){
      return view('competitions');
    }
    public function compete($var){
      return $var;
    }
}
