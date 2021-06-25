<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    $commentLength = \App\Comment::all()->count();
    $userLength = \App\User::all()->count();
    return [
        'user_id'=>$faker->numberBetween(1,$userLength),
        'reply'=>$faker->unique()->sentence,
        'comment_id'=>$faker->numberBetween(1,$commentLength)
    ];
});
