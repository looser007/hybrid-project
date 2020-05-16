@extends('layouts.full_layout')

  @section('content')
  <div class="login-form">
       <h3 class="login-logo" style:"text-align:center"><strong>Login</strong></h3>
       <div>
         <input class="input-fields"type="emial" placeholder="Email"><br>
         <input class="input-fields"type="password" placeholder="Password"><br>
       </div>
       <button class="login-form-login-button" type="Submit" name="button">Login</button>
  </div>

  @endsection
