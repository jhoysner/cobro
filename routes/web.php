<?php


Route::get('/', function () {
    return view('visitante.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'] ,function () 
{
	Route::resource('predios', 'PredioController');
	Route::get('predios-sin-asignar', 'PredioController@predioSinAsignar')->name('unnassigned');
	Route::get('predios-asignados', 'PredioController@predioAsignado')->name('assignor');
	Route::post('predios-asignar', 'PredioController@predioAsignarAdministrativeStore')->name('assignor.store');
	Route::post('predio-asignar', 'PersonaPredioController@predioAsignarPersona');
	Route::resource('personas', 'PersonasController');
	Route::get('persona-find/{identificador}', 'PersonasController@personaFind');
	Route::post('persona/find-create', 'PersonasController@PersonafindCreate');
	Route::resource('usuarios', 'UserController');
	Route::get('usuarios-tipo/{id}', 'UserController@userstype');
	Route::resource('personas-predios', 'PersonaPredioController');

	Route::get('notificaciones', 'NotificationController@index')->name('notificaciones.index');
    Route::get('notificaciones/{id}', 'NotificationController@read')->name('notifications.read');
    // Route::delete('notificaciones/{id}', 'NotificationController@destroy')->name('notifications.destroy');
    Route::get('notificaciones-visibilidad/{id}', 'NotificationController@visibilidad')->name('notification.visibilidad');

    Route::post('importar', 'ImportController@import')->name('importar');


});