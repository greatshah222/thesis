<?php

use Faker\Generator as Faker;

$factory->define(App\ForumModel\Fcategory::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        'name' => $word,
        'slug' => str_slug($word)
    ];
});