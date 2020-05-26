<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sanpham;
use Faker\Generator as Faker;

$factory->define(sanpham::class, function (Faker $faker) {
    $ID = App\Models\danhmuc::pluck('id')->toArray();
    return [
        'ten' => $faker->ten,
        'anh' =>  'img.jpg',
        'gia' => $faker->numberBetween(1000, 10000000),
        'soluong' => $faker->numberBetween(1, 1000),
        'danhmuc_id' => $faker ->randomElement($ID)
    ];
});
