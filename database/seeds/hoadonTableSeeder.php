<?php

use Illuminate\Database\Seeder;

class hoadonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\hoadon::class, 10)->create();
    }
}
