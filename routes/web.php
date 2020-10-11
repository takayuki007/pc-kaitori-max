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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@show')->name('shop.show');
Route::get('/contact', 'ContactController@show')->name('contact.show');
Route::get('/transaction', 'TransactionController@show')->name('transaction.show');
Route::get('/privacy', 'PrivacyController@show')->name('privacy.show');
Route::get('/rule', 'RuleController@show')->name('rule.show');
Route::get('/info', 'InfoController@show')->name('info.show');
