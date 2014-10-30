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

Route::get('/', [
	'as'		=>	'root',
	'uses'		=>	'HomeController@root'
]);

Route::get('facebook-login', [
	'as'		=>	'facebookLogin',
	'uses'		=>	'HomeController@facebookLogin'
]);

Route::post('redirect', [
	'as'		=>	'redirect',
	'uses'		=>	'HomeController@redirect'
]);

Route::get('invite', [
	'as'		=>	'invite',
	'uses'		=>	'HomeController@invite'
]);