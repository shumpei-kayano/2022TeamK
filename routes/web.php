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
Route::get('/company', 'UserMypageController@company')->name('company');


    // 案件ルート
Route::get('/show', 'MatterController@show')->name('show');
Route::get('/postingScreen', 'MatterController@postingScreen')->name('postingScreen');
Route::get('/approvalIndex', 'MatterController@approvalIndex')->name('approvalIndex');
Route::get('/listingConfirmation', 'MatterController@listingConfirmation')->name('listingConfirmation');
Route::get('/home/matter/create', 'MatterController@create')->name('Matter.create');

    // ポートフォリオルート
Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('/portfolioAdd', 'PortfolioController@add')->name('portfolioAdd');
Route::post('/create', 'PortfolioController@create')->name('portfolio_create');
Route::get('/update', 'PortfolioController@update')->name('update');


});
