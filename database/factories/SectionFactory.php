<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Section::class, function (Faker $faker) {
    $name = $faker->unique()->company;
    $slug = Str::slug($name, '-');
    return [
        'name'=> $name,
        'slug'=> $slug,
        'subtitle'=>$faker->unique()->sentence,
    ];
});
