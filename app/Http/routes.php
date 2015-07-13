<?php

Route::get('/', [
    'as'   => 'home',
    'uses' => 'WelcomeController@index'
]);

Route::get('cv', [
    'as'   => 'pages.cv',
    'uses' => 'PagesController@cv'
]);

Route::group(['prefix' => 'blog'], function() {

    Route::get('/', [
        'as'   => 'blog.index',
        'uses' => 'BlogController@index'
    ]);

    Route::get('{year}/{month}/{title}', [
        'as'   => 'blog.post',
        'uses' => 'BlogController@post'
    ]);

});




/*
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
*/
