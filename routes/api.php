<?php


Route::apiResource('/question', 'QuestionController');
Route::apiResource('/fcategory', 'FcategoryController');
Route::apiResource('/question/{question}/reply', 'ReplyController');


