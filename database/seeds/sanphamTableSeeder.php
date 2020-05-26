<?php

use Illuminate\Database\Seeder;

class sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\sanpham::class, 10)->create();
    }
}
