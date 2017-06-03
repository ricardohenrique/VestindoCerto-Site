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

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('quem-somos', function () {
    return view('quem-somos');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('como-funciona', function () {
    return view('como-funciona');
});

Route::get('simulador', function () {
    return view('simulador');
});

Route::get('apresentacao', function () {
    return view('apresentacao');
});

Route::get('login', function () {
    return view('login');
});