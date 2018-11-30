<?php

use Faker\Generator as Faker;
use App\ForumModel\Fcategory;


$factory->define(App\ForumModel\Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'fcategory_id' => function () {
            return Fcategory::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        }
        
    ];
});
