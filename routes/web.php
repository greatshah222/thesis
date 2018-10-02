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
Route::get('/','FrontController@index')->name('name');


Auth::routes();
Route::prefix('manage')->middleware('admin')->group(function (){

    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users','UserController');

    Route::get('/users/admin/{id}','UserController@admin')->name('users.admin');
    Route::get('/users/not-admin/{id}','UserController@not_admin')->name('users.not.admin');




});
Route::resource('/profile','ProfilesController');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('contactme', 'FrontController@postContactme');
Route::post('/store-payment','DonateController@storePayment')->name('payment.store');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/photo','PhotoController@index')->name('photo');

    Route::get('/photocreate','PhotoController@create')->name('photo.create');

    Route::post('photome', 'PhotoController@store')->name('photo.store');
    Route::delete('photo/{id}','PhotoController@destroy')->name('photo.destroy');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/settings','SettingsController@index')->name('settings');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');



});
Route::resource('personals','PersonalController');




