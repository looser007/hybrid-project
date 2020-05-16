<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@home')->name('home');
Route::get('/login','LoginController@login')->name('login');
Route::get('/register','RegisterController@register')->name('registration');
Route::post('/register_account','RegisterController@create_account')->name('register_account');
Route::get('/Online-Classes','LoginController@OnlineClasses')->name('Online-Classes');
Route::get('/Recorded-Classes','LoginController@RecordedClasses')->name('Recorded-Classes');
Route::get('/Placement-assistance','Controller@PlacementAssistance')->name('Placement-Assistance');
Route::get('/Contact-Us','Controller@ContactUs')->name('Contact-Us');
