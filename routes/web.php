<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home.go');

Route::resource('user', 'UserController');

Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/query', "SearchController@query")->name('search.query');

Route::post('/login', "LoginController@login")->name('login.validate');

Route::post('/ad', "AdController@create")->name('ad.create');
Route::get('/ad/create', "AdController@index")->name('ad.show');
Route::get('/ad/show/{id}', "AdController@detail")->name('ad.detail');
Route::get('/ad/show', "AdController@getAll")->name('ad.my');


Route::get('/logout', "LoginController@logout")->name('login.getOut');


Route::post('/bid/post', "BidController@post") -> name('bid.post');
Route::get('/bid/show', "BidController@show") -> name('bid.show');
