<?php

use Illuminate\Database\Seeder;

class danhmucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(\App\Models\danhmuc::class, 10)->create();    
    }
}