<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' =>  $faker->name ,
        'email'=>  $faker->unique()->safeEmail,
        'email_verified_at' => now()   ,
        'password'=>  '12312313'  ,
        'remember_token'=>  Str::random(10),
    ];
});
