<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\nhanvien;
use Faker\Generator as Faker;

$factory->define(nhanvien::class, function (Faker $faker) {
    return [
        'ten' => $faker->ten,
        'taikhoan' => $faker->taikhoan,
        'matkhau' => $faker->matkhau,
    ];
});
