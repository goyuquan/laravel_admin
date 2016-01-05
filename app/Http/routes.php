<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/articles/{id?}', 'ArticleController@index');
    Route::post('/article/store', 'ArticleController@store');
    Route::get('/article/{id}/edit', 'ArticleController@edit');
    Route::post('/article/{id}/update', 'ArticleController@update');
    Route::post('/article/fileupload','ArticleController@fileUpload');

    Route::get('/article/{article}', function (App\Article $article) {
        return view('articles.show',['article'=>$article]);
    });


    Route::group(['middleware' => 'auth'], function () {

        Route::get('/admin','AdminController@index');
        Route::get('/admin/articles/{id?}', 'ArticleController@article_list');
        Route::get('/admin/article/create', 'ArticleController@create');
        Route::get('/admin/article/{id}/destroy', 'ArticleController@destroy');

    });

});
