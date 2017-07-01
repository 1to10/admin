<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('create_user','UserRegisterController@create_user');
Route::post('post_user','UserRegisterController@post_user');
Route::get('login_user','LoginUserController@login_user');
Route::post('user_login','LoginUserController@user_login');
Route::get('logout_user','LogoutController@logout');
Route::post('user_logout','LogoutController@user_logout');
Route::get('dashboard','AdminController@dashboard');
Route::get('guest','AdminController@guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

