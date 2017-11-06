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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contactanos', function () {
    return view('contact');
});

Route::post('/login', 'LoginController@autenticar');
Route::get('/logout', 'LoginController@logout');

Route::resource('/cita', 'CitasController');

Route::get('/busqueda', 'CitasController@buscar');
