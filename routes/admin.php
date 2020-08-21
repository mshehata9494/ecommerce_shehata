<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin','prefix'=>'admin'],function (){
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

});

Route::group(['namespace'=>'Dashboard','middleware'=>'guest:admin','prefix'=>'admin'],function (){
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

});




































