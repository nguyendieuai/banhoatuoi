<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->double('gia');
            $table->date('ngaylaphoadon');
            $table->string('diachigiaohang');
            $table->string('ghichu');
            $table->integer('khachhang_id')->unsigned();
            $table->integer('nhanvien_id')->unsigned();
            $table->foreign('khachhang_id')->references('id')->on('khachhang');
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
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
        Schema::dropIfExists('hoadon');
    }
}
