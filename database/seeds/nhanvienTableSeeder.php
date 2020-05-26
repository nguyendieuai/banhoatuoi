<?php

use Illuminate\Database\Seeder;

class nhanvienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\nhanvien::class, 10)->create();
    }
}
