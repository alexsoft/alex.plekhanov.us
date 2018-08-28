<?php

Route::view('/', 'welcome')->name('home');

Route::get('/cv', 'PagesController@cv')->name('pages.cv');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [
        'as'   => 'blog.index',
        'uses' => 'PostsController@index',
    ]);

    Route::get('{year}/{month}/{title}', [
        'as'   => 'blog.post',
        'uses' => 'PostsController@show',
    ]);
});

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::get('/', 'ProjectsController@index')->name('index');
});

Route::group(['prefix' => 'travel', 'as' => 'travel.'], function () {
    Route::get('/countries', 'TravelController@countries')->name('countries');
});
