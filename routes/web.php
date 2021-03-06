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

Route::get('/about', function () {
    return view('about');
});

Route::get('/usuario', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index');

Route::get('usuario', 'UsuarioController@index');

Route::resource('historial', 'HistorialController');

Route::resource('serviciosUsuario', 'ServUsuController');

Route::resource('posts', 'PostsController');

Route::resource('servicios', 'serviciosController');
//Route::get('servicios', 'serviciosController@index');

Route::resource('pagos', 'PagosController');
