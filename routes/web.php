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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['verified'])->group(function () {

    //★ログイン後のルート設定★//

    // マイページルート
Route::get('/account', 'UserMypageController@account')->name('account');
Route::get('/favorite', 'UserMypageController@favorite')->name('favorite');

    // 案件ルート
Route::get('/show', 'MatterController@show')->name('show');
Route::get('/home/matter/create', 'MatterController@create')->name('Matter.create');

    // ポートフォリオルート
Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('/update', 'PortfolioController@update')->name('update');


});
