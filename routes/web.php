<?php

use App\Http\Controllers;

/*Route::get('/', function ()
{
    return view('auth.login');
})->middleware('auth');*/
Route::get('/login', function () {
    return view('partials.auth.login');
});
Route::get('/logintest', function () {
    return view('auth.logintest');
});
/*Route::group(['prefix' => 'b'], function () {
    Route::get('/{id}', function () {
        return view('partials.board.board-base');
    });
});*/
/*Route::group(['prefix' => 'u'], function () {
    Route::get('/boards', function () {
        return view('partials.dashboard.dashboard');
    });
    Route::get('/account', function () {
        return view('partials.dashboard.dashboard');
    });
});*/

Auth::routes();

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('partials.dashboard.dashboard');
    });
});
Route::group(['prefix' => 'b', 'middleware' => 'auth'], function () {
   Route::get('{board_id}', 'BoardsController@getBoard');
/*    Route::get('{board_id}', function () {
        return view('partials.board.board-base');
    });*/
    /*Route::get('{board_id}', function () {
        return view('partials.board.board-base');
    });*/
});
Route::group(['prefix' => 'u', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'p'], function () {
        Route::get('/', function () {
            return view('partials.user.user-profile');
        });
    });
    Route::get('/boards', function () {
        return view('partials.dashboard.dashboard');
    });
    Route::get('/boards-new', function () {
        return view('partials.dashboard.dashboard-new');
    });

});
Route::group(['prefix' => 'boards', 'middleware' => 'auth'], function () {
    Route::post('new', 'BoardsController@createBoard');
    Route::get('short', 'BoardsController@getBoardsShort');
});
Route::group(['prefix' => 'lists', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'cards', 'middleware' => 'auth'], function () {
        Route::post('new', 'CardsController@createCard');
    });
    Route::post('rename', 'ListsController@rename');
    Route::post('new', 'ListsController@createList');
    Route::get('{board_id}', 'ListsController@getLists');
});
Route::get('/home', 'HomeController@index');
