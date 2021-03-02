<?php
Route::post('login','Api\AuthController@login');
Route::get('all_users','Api\GeneralController@all_user');
Route::group(['middleware'=>['jwt.auth']],function(){
    Route::get('my_posts','Api\UserController@index');
    Route::post('logout','Api\AuthController@logout');
});