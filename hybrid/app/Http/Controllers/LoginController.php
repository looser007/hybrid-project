<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
      return view('login');
    }
    public function OnlineClasses(){
      return view('Online-Classes');
    }
    public function RecordedClasses(){
      return view('Recorded-Classes');
    }
}
