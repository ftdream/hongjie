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
    return view('index');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=> 'adminauth'], function () {
});

Route::group(['prefix' => 'withdraw', 'namespace' => 'DingTalk'], function () {
    Route::get('index', ['as' => 'withdraw-index', 'uses' => 'WithdrawController@getIndex']);
    Route::get('add', 'WithdrawController@getAdd');
    Route::get('step2', 'WithdrawController@getStep2');
    Route::post('ajax_step1', 'WithdrawController@postAjaxStep1');
    Route::post('ajax_step2', 'WithdrawController@postAjaxStep2');
});
