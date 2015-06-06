<?php

Route::get('/', [
	'as'   => 'home',
	'uses' => 'WelcomeController@index'
]);

Route::get('cv', [
	'as'   => 'pages.cv',
	'uses' => 'PagesController@cv'
]);

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
