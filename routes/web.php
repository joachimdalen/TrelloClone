<?php

Route::get('/', function () {
    return view('partials.board.board-base');
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
    Route::get('/dashboard', function () {
        return view('partials.dashboard.dashboard');
    });
    Route::get('/account', function () {
        return view('partials.dashboard.dashboard');
    });
});
