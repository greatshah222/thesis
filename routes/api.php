<?php


Route::apiResource('/question', 'QuestionController');
Route::apiResource('/fcategory', 'FcategoryController');
Route::apiResource('/question/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');
Route::group([

    'prefix' => 'auth',
    'middleware'=>'api'

], function ($router) {

    Route::post('flogin', 'AuthController@login');
    Route::post('flogout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('fsignup', 'AuthController@signup');
    Route::post('payload', 'AuthController@payload');


});

