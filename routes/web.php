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
    return view('auth.login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mi_primer_ruta', function(){
    return view('test.index');
});

Route::get('/name/{name}', function($name){
    return 'Hello World '.$name;
});

Route::resource('users', 'UserController');
Route::resource('services', 'ServiceController');
Route::resource('axes', 'AxesController');
Route::resource('engines', 'EngineController');
Route::resource('roles', 'RoleController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
