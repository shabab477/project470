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

Route::resource('/user', 'UserController');

Route::get('user/ad/search', 'SearchController@index')->name('search.index');
Route::get('user/query', "SearchController@query")->name('search.query');

Route::post('user/login', "LoginController@login")->name('login.validate');

Route::post('user/ad', "AdController@create")->name('ad.create');
Route::get('user/ad/create', "AdController@index")->name('ad.show');
Route::get('user/ad/show/{id}', "AdController@detail")->name('ad.detail');
Route::get('user/ad/show', "AdController@getAll")->name('ad.my');


Route::get('user/logout', "LoginController@logout")->name('login.getOut');


Route::post('user/bid/post', "BidController@post") -> name('bid.post');
Route::get('user/bid/show', "BidController@show") -> name('bid.show');

Auth::routes();

Route::get('/home', 'HomeController@index');
