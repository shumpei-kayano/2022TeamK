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

// メール確認
Route::get('/confirmation', 'UserMypageController@confirmation')->name('confirmation');

Route::middleware(['verified'])->group(function () {

    //★ログイン後のルート設定★//

    // マイページルート
Route::get('/account', 'UserMypageController@account')->name('account');
Route::get('/accountEdit', 'UserMypageController@edit')->name('account_edit');
Route::post('/accountUpdate', 'UserMypageController@update')->name('account_update');
Route::get('/favorite', 'UserMypageController@favorite')->name('favorite');
Route::get('/company', 'UserMypageController@company')->name('company');



    // 案件ルート
Route::get('/show', 'MatterController@show')->name('show');
Route::get('/postingScreen', 'MatterController@postingScreen')->name('postingScreen'); //掲載中案件
Route::post('/matterEdit/{id}', 'MatterController@matterEdit')->name('matterEdit'); //案件編集画面
Route::post('/matterUpdate/{id}', 'MatterController@matterUpdate')->name('matter_update'); //案件編集
Route::post('/matterRemove', 'MatterController@remove')->name('matter_remove'); //案件編集
Route::post('matterRegister', 'MatterController@post')->name('matter.post');
Route::post('/matterCreate', 'MatterController@create')->name('matter.create');
Route::get('/postingScreen', 'MatterController@postingScreen')->name('postingScreen');
Route::get('/approvalIndex', 'MatterController@approvalIndex')->name('approvalIndex');
Route::get('/listingConfirmation', 'MatterController@listingConfirmation')->name('listingConfirmation');
Route::get('/matter/confirmation', 'MatterController@matterConfirmation')->name('matter.matterConfirmation');
Route::post('/matter/registar', 'MatterController@matterRegistar')->name('matter.registar');
// Route::post('/matterCreate', 'MatterController@create')->name('matter.create');
Route::get('/matter/store', 'MatterController@store')->name('matter.store');
Route::get('/mattertest', 'MatterController@index')->name('mattertest');
Route::get('/matter/add', 'MatterController@add')->name('matter.add');
Route::get('/detail/{id}', 'MatterController@detail')->name('matter.detail');

    // ポートフォリオルート
Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('/portfolioAdd', 'PortfolioController@add')->name('portfolioAdd');
Route::post('/create', 'PortfolioController@create')->name('portfolio_create');
Route::get('/portfolioEdit', 'PortfolioController@edit')->name('portfolioEdit');
Route::post('/portfolioUpdate', 'PortfolioController@update')->name('portfolio_update');
Route::get('/portfolioDel', 'PortfolioController@delete')->name('portfolioDel');
Route::post('/remove', 'PortfolioController@remove')->name('portfolio_remove');

  //お気に入り
// Route::post('/show', 'FavoriteController@store')->name('favorite');
// Route::delete('/show', 'FavoriteController@delete')->name('favorite.del');
Route::post('/detail', 'FavoriteController@store')->name('favorite2');
Route::delete('/detail', 'FavoriteController@delete')->name('favorite.del2');
});
