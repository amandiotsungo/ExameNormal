<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');*/

Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::resource('eventos', 'eventoController');

Route::get('eventos/{id}/delete', [
    'as' => 'eventos.delete',
    'uses' => 'eventoController@destroy',
]);


Route::resource('participantes', 'participanteController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'participanteController@destroy',
]);

Route::resource('palestras', 'palestraController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'participanteController@destroy',
]);

Route::resource('festas', 'festaController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'participanteController@destroy',
]);

Route::resource('workshops', 'workshopController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'participanteController@destroy',
]);