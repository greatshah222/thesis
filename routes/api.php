<?php


Route::apiResource('/question', 'QuestionController');
Route::apiResource('/fcategory', 'FcategoryController');
Route::apiResource('/question/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');
Route::group([

    'prefix' => 'auth',
    'middleware'=>'api'

], function () {

    Route::post('flogin', 'AuthController@flogin');
    Route::post('flogout', 'AuthController@flogout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('fsignup', 'AuthController@fsignup');

});

