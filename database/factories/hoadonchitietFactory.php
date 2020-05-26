<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\hoadonchitiet;
use Faker\Generator as Faker;

$factory->define(hoadonchitiet::class, function (Faker $faker) {
    $hoadonID = App\Models\hoadon::pluck('id')->toArray();
    $sanphamID = App\Models\sanpham::pluck('id')->toArray();
    return [
        'gia' => $faker->numberBetween(1000, 10000000),
        'soluong' => 1,
        'hoadon_id' => $faker ->randomElement($hoadonID),
        'sanpham_id' => $faker ->randomElement($sanphamID),
    ];
});
