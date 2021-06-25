<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Discussion;
use App\Section;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Discussion::class, function (Faker $faker) {
    $title = $faker->unique()->sentence;
    $slug = Str::slug($title, '-');
    $sectionLength = Discussion::all()->count();
    $userLength = \App\User::all()->count();
    return [
        'title'=> $title,
        'slug'=> $slug,
        'user_id'=>$faker->numberBetween(1,$userLength),
        'discussion'=>$faker->unique()->sentences,
        'section_id'=>$faker->numberBetween(1,$sectionLength)

    ];
});
