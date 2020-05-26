<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\danhmuc;
use Faker\Generator as Faker;

$factory->define(danhmuc::class, function (Faker $faker) {
    return [
        'ten' => $faker->ten
    ];
});
