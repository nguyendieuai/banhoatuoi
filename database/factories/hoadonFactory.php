<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\hoadon;
use Faker\Generator as Faker;

$factory->define(hoadon::class, function (Faker $faker) {
    $khachhangID = App\Models\khachhang::pluck('id')->toArray();
    $nhanvienID = App\Models\nhanvien::pluck('id')->toArray();
    return [
        'gia' => $faker->numberBetween(1000, 10000000),
        'ngaylaphoadon' => $faker->ngaylaphoadon,
        'diachigiaohang'  => $faker->diachigiaohang,
        'ghichu' => $faker->ghichu,
        'khachhang_id' => $faker ->randomElement($khachhangID),
        'nhanvien_id' => $faker ->randomElement($nhanvienID),
    ];
});
