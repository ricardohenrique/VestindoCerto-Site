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


Route::get('/', function () {
    return view('welcome');
});

*/
// Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('quem-somos', "QuemSomosController@index");
Route::get('contato', "ContatoController@index");
// Route::get('login', "LoginController@index");


Route::get('como-funciona', function () {
    return view('como-funciona');
});

Route::get('simulador', function () {
    return view('simulador');
});

Route::get('apresentacao', function () {
    return view('apresentacao');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
