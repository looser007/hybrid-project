<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
  public function register()
  {
    return view('register');
  }
  public function create_account(Request $request)
  {
           $validateData=$request->validate([
           'name'=>'min:3|required',
           'email'=>'required|email|unique:users'  ,
           'password'=>'required|min:6|max:12|confirmed',
           'number'=>'required|min:10|max:10',
      ]);
      $user=new User();
      $user->name=$request['name'];
      $user->email=$request['email'];
      $user->password=$request['password'];
      $user->save();

     return redirect(route('registration'))->with('success','Account Created sucessfully');

  }
}
