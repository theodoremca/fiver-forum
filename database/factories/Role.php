<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {

    $roles = ['student','admin'];
    $role = Role::all()->count() > 0 ? $roles[1] : $roles[0];
    return [
        'role_name' => $role
    ];
});
