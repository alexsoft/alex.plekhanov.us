<?php

Route::get('/', [
    'as'   => 'home',
    'uses' => 'WelcomeController@index',
]);

Route::get('cv', [
    'as'   => 'pages.cv',
    'uses' => 'PagesController@cv',
]);

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

Route::get('sitemap.xml', [
    'as'   => 'sitemap',
    'uses' => 'PagesController@sitemap',
]);
