<?php

Route::group(['prefix' => 'auth'], function () {
    Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::resource('theme', 'ThemeController');
    Route::resource('test', 'TestController');
});
