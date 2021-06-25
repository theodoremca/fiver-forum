<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $userLength = \App\User::all()->count();
    return [
        'user_id'=>$faker->numberBetween(1,$userLength),
        'comment' => $faker->sentence,
        'discussion_id' => $faker->numberBetween(1,\App\Discussion::all()->count()),
    ];
});
