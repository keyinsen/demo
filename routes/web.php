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
Route::group(['namespace' => 'Home', 'prefix' => 'User'], function () {
    Route::get('index','UserController@index');

    Route::post('register','UserController@register');
    Route::post('bindCard','UserController@bindCard');
});


Route::group(['namespace' => 'Home', 'prefix' => 'Test'], function () {
    route::get('rsa','TestController@rsa');
});

