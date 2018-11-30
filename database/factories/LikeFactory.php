<?php
use Faker\Generator as Faker;
use App\ForumModel\Like;
$factory->define(App\ForumModel\Like::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return \App\User::all()->random();
        }
    ];
});