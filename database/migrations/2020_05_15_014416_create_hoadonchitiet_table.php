<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonchitiet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong');
            $table->double('gia');
            $table->integer('hoadon_id')->unsigned();
            $table->integer('sanpham_id')->unsigned();
            $table->foreign('hoadon_id')->references('id')->on('hoadon');
            $table->foreign('sanpham_id')->references('id')->on('sanpham');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonchitiet');
    }
}
