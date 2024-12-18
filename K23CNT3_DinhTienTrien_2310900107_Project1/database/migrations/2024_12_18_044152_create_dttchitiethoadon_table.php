<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dttchitiethoadon', function (Blueprint $table) {
            $table->id();
            $table->integer('dttHoadonID');
            $table->integer('dttSanphamID')->references('id')->on('dtthoadon');
            $table->integer('dttSoluongmua')->references('id')->on('dttsanpham');
            $table->float('dttDongiamua');
            $table->float('dttThanhtien');
            $table->tinyInteger('dttTrangthai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttchitiethoadon');
    }
};
