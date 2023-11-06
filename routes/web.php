<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['namespace'=>'index'],function (){
    Route::get('/', 'IndexController@index')->name('home');
    Route::post('/res', 'IndexController@res')->name('home.res');
    Route::post('/res/store', 'IndexController@res_stor')->name('home.res.store');
});

