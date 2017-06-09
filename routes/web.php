<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('quem-somos', "QuemSomosController@index");
Route::get('contato', "ContatoController@index");
Route::get('como-funciona', "ComoFuncionaController@index");
Route::get('simulador', "SimuladorController@index");
Route::get('apresentacao', "ApresentacaoController@index");

Route::group(['prefix' => 'usuario'], function () {
    Route::get('/', "UsuarioController@index");
    Route::get('perfil', "UsuarioController@perfil");
    Route::get('gerar-look', "LookController@index");
    Route::post('gerar-look', "LookController@newLook");
    Route::get('roupas', "RoupasController@index");
    Route::get('roupas/nova', "RoupasController@create");
    Route::post('roupas/store', "RoupasController@store");
    Route::post('perfil', "UsuarioController@update");
    Route::get('roupas/get/{filename}', 'RoupasController@render');
});

Route::get('logout', "UsuarioController@logout");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
