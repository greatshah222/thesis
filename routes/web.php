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


Route::view('try','forum/home');
Route::view('try/{any}','forum/home');
Route::view('try/{any}/{any1}','forum/home');



Route::get('/','FrontController@index')->name('name');
Route::post('subscribe', 'FrontController@subscribe');



Auth::routes();
Route::prefix('manage')->middleware('web')->group(function (){

    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users','UserController');

    Route::get('/users/admin/{id}','UserController@admin')->name('users.admin');
    Route::get('/users/not-admin/{id}','UserController@not_admin')->name('users.not.admin');




});

Route::resource('/profile','ProfilesController');


Route::resource('posts','PostController');
Route::get('posts/trashed','PostController@trashed')->name('posts.trashed');
Route::get('posts/kill/{id}','PostController@kill')->name('posts.kill');
Route::get('posts/restore/{id}','PostController@restore')->name('posts.restore');

Route::resource('categories','CategoryController',['except'=>['create']]);
Route::resource('tags','TagController',['except'=>['create']]);



Route::group(['middleware' => 'web'], function () {
    Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');
    Route::get('blog','BlogController@getIndex')->name('blog.index');

});
// comments
Route::post('comments/{post_id}','CommentsController@store')->name('comments.store');

Route::get('comments/{id}/edit','CommentsController@edit')->name('comments.edit');
Route::get('comments/{id}/delete','CommentsController@delete')->name('comments.delete');


Route::put('comments/{id}','CommentsController@update')->name('comments.update');
Route::delete('comments/{id}','CommentsController@destroy')->name('comments.destroy');

Route::resource('categories','CategoryController',['except'=>['create']]);
Route::resource('tags','TagController',['except'=>['create']]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('contactme', 'FrontController@postContactme');
Route::post('/store-payment','DonateController@storePayment')->name('payment.store');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'web'], function () {

    Route::get('/photo','PhotoController@index')->name('photo');

    Route::get('/photocreate','PhotoController@create')->name('photo.create');

    Route::post('photome', 'PhotoController@store')->name('photo.store');
    Route::delete('photo/{id}','PhotoController@destroy')->name('photo.destroy');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/settings','SettingsController@index')->name('settings');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');



});
Route::resource('personals','PersonalController');




