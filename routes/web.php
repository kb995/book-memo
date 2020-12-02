<?php

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'books', 'as' => 'books.'], function() {

    // ===== Book =====
    // タグ検索
    // Route::get('/search/{btag}', 'BookController@searchTag')->name('btag');

    // 書籍登録
    Route::get('/create', 'BookController@create')->name('create');
    Route::post('/create', 'BookController@store')->name('store');


    // 書籍一覧
    Route::get('/', 'BookController@index')->name('index');
    // 書籍一覧 (キーワード&カテゴリー 検索)
    Route::post('/', 'BookController@index')->name('index');

    // 書籍詳細 画面
    Route::get('/{book}', 'BookController@show')->name('show');

    // 書籍詳細(メモ キーワード&タグ検索)
    Route::post('/{book}', 'BookController@show')->name('show');

    // 書籍編集 画面
    Route::get('/{book}/edit', 'BookController@edit')->name('edit');
    Route::patch('/{book}/edit', 'BookController@update')->name('update');

    // 書籍削除 機能
    Route::delete('/{book}/destroy', 'BookController@destroy')->name('destroy');

    // ===== Memo =====
    Route::group(['prefix' => '{book}/memos', 'as' => 'memos.'], function(){
        // メモキーワード検索
        // Route::post('/search', 'MemoController@searchKeyword')->name('keyword');
        // メモタグ検索
        // Route::get('/{mtag}', 'MemoController@searchTags')->name('mtag');

        // メモ登録
        Route::get('/create', 'MemoController@create')->name('create');
        Route::post('/create', 'MemoController@store')->name('store');

        // メモ編集
        Route::get('/{memo}/edit', 'MemoController@edit')->name('edit');
        Route::patch('/{memo}/edit', 'MemoController@update')->name('update');

        // メモ削除
        Route::delete('/{memo}/destroy', 'MemoController@destroy')->name('destroy');

    });
});

Route::get('/home', 'HomeController@index')->name('home');
