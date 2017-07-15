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
    return view('pages/home');
});
Route::get('/admin',function(){
  return view('pages/adminsite');
});
Route::get('/test',function(){
  return view('pages/test');
});
Route::get('/taocv',function(){
  return view('pages/taocv');
});
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
