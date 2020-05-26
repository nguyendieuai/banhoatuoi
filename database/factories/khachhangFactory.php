<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\khachhang;
use Faker\Generator as Faker;

$factory->define(khachhang::class, function (Faker $faker) {
    return [
        'diachi' => $faker->diachi(),
        'sodienthoai' => $faker->randomDigit,
        'email' => $faker->unique()->email,
    ];
});
