<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Interview::class, function (Faker $faker) {
    return [
        'company_name' => $faker->text(20),
        'company_interview' => $faker->text(200)
    ];
});
