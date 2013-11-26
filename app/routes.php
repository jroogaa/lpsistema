<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('login',function(){

	return View::make('login.login');
});
/*
login de usuario
*/
Route::post('login','UsuarioController@validar_login');

Route::get('dentro','UsuarioController@dentro_login');

Route::get('salirlogin','UsuarioController@salir_login');

Route::get('afuera','UsuarioController@error_login');
/*
fin de acciones de login
*/

/*enlaces de profesor
*/


Route::get('profesor','ProfesorController@consultar');




/*
fin de las rutas profesor

*/

/*
Enlaces de administrador
*/

Route::get('admin','AdminController@consultar');

/*
Fin de enlaces administrador
*/