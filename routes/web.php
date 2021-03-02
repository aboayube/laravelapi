<?php
Route::get('/','AppController@test_api');
/*
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
|

Route::get('/{any?}','AppController@index')->where('any','.*');