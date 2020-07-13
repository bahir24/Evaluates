<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evaluate;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Evaluate::class, function (Faker $faker) {
    return [
        'point' => $faker->numberBetween(1,5),
        'student' => function () {
            return App\User::inRandomOrder()->first()->id;
        },
        'science' => function(){
            return App\Science::inRandomOrder()->first()->science;
        },
    ];
});
