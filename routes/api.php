<?php

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('theme', 'Api\ThemeController@index');
});
