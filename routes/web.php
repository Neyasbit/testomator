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

    Route::get('test/{test}/questions', 'QuestionController@index')->name('question.index');

    Route::get('question/{question}', 'QuestionController@show')->name('question.show');

    Route::get('question/{question}/edit', 'QuestionController@edit')->name('question.edit');

    Route::patch('question/{question}', 'QuestionController@update')->name('question.update');

    Route::delete('question/{question}', 'QuestionController@destroy')->name('question.destroy');
});
