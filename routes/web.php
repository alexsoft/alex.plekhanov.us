<?php

Route::view('/', 'welcome')->name('home');

Route::view('/cv', 'pages.cv')->name('pages.cv');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [
        'as'   => 'blog.index',
        'uses' => 'BlogController@index',
    ]);

    Route::get('{year}/{month}/{title}', [
        'as'   => 'blog.post',
        'uses' => 'BlogController@post',
    ]);
});

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::get('/', 'ProjectsController@index')->name('index');
});

Route::group(['prefix' => 'travel', 'as' => 'travel.'], function () {
    Route::get('/', 'TravelController@index')->name('index');
});
