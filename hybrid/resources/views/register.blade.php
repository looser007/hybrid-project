@extends('layouts.full_layout')

   @section('content')
              <div class="error-messages" style="background:black;color:green;">
                @if ($message=Session::get('success'))
                  <p>{{ $message}}</p>
                @endif
              </div>
              <div class="registration-form">
                     <h3 class="registration-logo" style:"text-align:center"><strong>Registration Form</strong></h3>
                     <form method="post" action=" {{ route('register_account') }}">
                       @csrf
                     <div >
                       <input class="input-field"type="text"placeholder="Full Name" name="name"><br>
                       <input class="input-field"type="emial" placeholder="Email" name="email"><br>
                       <input class="input-field"type="number" placeholder="Mobile Number" name="mobile_number"><br>
                       <input class="input-field"type="password" placeholder="Password" name="password"><br>
                       <input class="input-field"type="password" placeholder="Confirm Password" name="password_confirmation"><br>
                     </div>
                     <button class="registration-button" type="Submit" name="button">Register</button>
                   </form>
                </div>
              </div>


   @endsection
