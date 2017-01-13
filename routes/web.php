<?php

use App\Http\Controllers;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('partials.auth.login');
});
Route::group(['prefix' => 'b'], function () {
    Route::get('/{id}', function () {
        return view('partials.board.board-base');
    });
});
Route::group(['prefix' => 'u'], function () {
    Route::get('/boards', function () {
        return view('partials.dashboard.dashboard');
    });
    Route::get('/account', function () {
        return view('partials.dashboard.dashboard');
    });
});

Auth::routes();
Route::group(['prefix' => 'boards','middleware' => 'auth'], function () {
    Route::post('new', 'BoardsController@createBoard');
    Route::get('short', 'BoardsController@getBoardsShort');
});

Route::get('/home', 'HomeController@index');
