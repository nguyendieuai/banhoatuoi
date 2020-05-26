<?php

use Illuminate\Database\Seeder;

class hoadonchitietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\hoadonchitiet::class, 10)->create();
    }
}
