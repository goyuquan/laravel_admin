<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/articles/{id?}', 'ArticleController@index');
    Route::get('/article/create', 'ArticleController@create');
    Route::post('/article/store', 'ArticleController@store');
    Route::get('/article/{id}/edit', 'ArticleController@edit');
    Route::post('/article/{id}/update', 'ArticleController@update');
    Route::get('/article/{id}/destroy', 'ArticleController@destroy');
    Route::post('/article/fileupload','ArticleController@fileUpload');

    Route::get('/article/{article}', function (App\Article $article) {
        return view('articles.show',['article'=>$article]);
    });


});
