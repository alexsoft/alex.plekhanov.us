<?php

declare(strict_types=1);

use Alex\Http\Controllers\PagesController;
use Alex\Http\Controllers\PostsController;
use Alex\Http\Controllers\ProjectsController;
use Alex\Http\Controllers\TravelController;

Route::view('/', 'welcome')->name('home');

Route::get('/cv', [PagesController::class, 'cv'])->name('pages.cv');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');

    Route::get('{year}/{month}/{title}', [PostsController::class, 'show'])->name('blog.post');
});

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::get('/', [ProjectsController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'travel', 'as' => 'travel.'], function () {
    Route::get('/countries', [TravelController::class, 'countries'])->name('countries');
});
