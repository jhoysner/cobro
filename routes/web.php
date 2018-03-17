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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'] ,function () 
{
	Route::resource('predios', 'PredioController');
	Route::resource('personas', 'PersonasController');
	Route::get('persona-find/{identificador}', 'PersonasController@personaFind');
	Route::post('persona/find-create', 'PersonasController@PersonafindCreate');
	Route::post('predio-asignar', 'PredioController@predioAsignarPersona');
	Route::resource('usuarios', 'UserController');
	Route::get('usuarios-tipo/{id}', 'UserController@userstype');
});