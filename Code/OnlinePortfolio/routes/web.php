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

Route::get('/admin', function () {
    return view('adminside/pages/index');
});
<<<<<<< HEAD

Route::get('/users', 'AdminUsersController@index');
Route::get('/users/get_datatable', 'AdminUsersController@get_datatable');
Route::get('/users/edit/{id}',['uses'=>'AdminUsersController@edit','as'=>'edit']);
Route::get('/users/delete/{id}',['uses'=>'AdminUsersController@delete','as'=>'delete']);
Route::post('/update&{id}',['uses'=>'AdminUsersController@update','as'=>'update']);


Route::get('/skills', 'AdminSkillsController@index');
Route::get('/skills/get_datatable', 'AdminSkillsController@get_datatable');
Route::get('/skills/edit/{id}',['uses'=>'AdminSkillsController@edit','as'=>'edit']);
Route::get('/skills/delete/{id}',['uses'=>'AdminSkillsController@delete','as'=>'delete']);
Route::post('/skill/update&{id}',['uses'=>'AdminSkillsController@update','as'=>'update']);


Route::get('/degrees', 'AdminDegreesController@index');
Route::get('/degrees/get_datatable', 'AdminDegreesController@get_datatable');
Route::get('/degrees/edit/{id}',['uses'=>'AdminDegreesController@edit','as'=>'edit']);
Route::get('/degrees/delete/{id}',['uses'=>'AdminDegreesController@delete','as'=>'delete']);
Route::post('/degree/update&{id}',['uses'=>'AdminDegreesController@update','as'=>'update']);


Route::get('/companies', 'AdminCompaniesController@index');
Route::get('/companies/get_datatable', 'AdminCompaniesController@get_datatable');
Route::get('/companies/edit/{id}',['uses'=>'AdminCompaniesController@edit','as'=>'edit']);
Route::get('/companies/delete/{id}',['uses'=>'AdminCompaniesController@delete','as'=>'delete']);
Route::post('/company/update&{id}',['uses'=>'AdminCompaniesController@update','as'=>'update']);


//Route::get('/admin/users','AdminController@users');

Auth::routes();
Route::get('/', 'HomeController@index');
=======
Route::get('/taocv',function(){
  return view('pages/taocv');
});
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Auth::routes();

>>>>>>> 487b66f200275c3fb3b5e1928b50905154e62f57
Route::get('/home', 'HomeController@index')->name('home');
