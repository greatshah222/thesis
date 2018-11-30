<?php

use Faker\Generator as Faker;
use App\ForumModel\Question;

$factory->define(App\ForumModel\Reply::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->text,
        'question_id' => function () {
            return Question::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        },
    ];
});