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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'SiteController@index');
Route::get('user_login', 'SiteController@userLogin')->name('user_login');
Route::get('user_register', 'SiteController@userRegister')->name('user_register');
Route::get('contact_us', 'SiteController@contact_us')->name('contact_us');

Route::post('user_create', 'SiteController@user_create')->name('user_create');
Route::post('send_contact_us', 'SiteController@send_contact_us')->name('send_contact_us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
