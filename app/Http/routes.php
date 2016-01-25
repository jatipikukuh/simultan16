<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//test
Route::get('/cd', 'testController@cd');

//home and login
Route::get('/', 'simultanController@index');
Route::get('home', 'simultanController@index');

//admin
//Route::get('admin', 'adminController@index');
//Route::post('admin/login', 'adminController@login');
Route::get('list/@L4Y/{room}','profileController@show_all');
Route::get('S0s14l1545i', 'adminController@sosialisasi');
Route::post('S0s14l1545i/add', 'adminController@addSosialisasi');
Route::get('S0s14l1545i/del/{id}', 'adminController@deleteSosialisasi');
Route::get('S0s14l1545i/edit/{id}', 'adminController@editSosialisasi');
Route::post('S0s14l1545i/update/{id}/change', 'adminController@updateSosialisasi');

// login process
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//after login
Route::get('rule', 'profileController@rule');
Route::get('user', 'profileController@show');
Route::post('user/submit', 'profileController@update');

//ava
Route::get('ava', 'simultanController@ava');
Route::post('ava/store', 'simultanController@avaStore');
Route::get('ava/save/{fileName}', 'simultanController@avaSave');
Route::get('ava/delete/{id}', 'simultanController@avaDel');
Route::get('ava/all', 'simultanController@avaAll');

//Route::get('list/delete/{id}','simultanController@delete');
//Route::post('list/@L4Y/auth','simultanController@shower');
//untuk view password
//Route::get('show/smkad2039u492', 'simultanController@cetakUsername');

//bikin username
//Route::get('bikin', 'simultanController@home');
//Route::post('bikin/auth', 'simultanController@bikinUsername');


