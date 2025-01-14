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
        Schema::create('dtthoadon', function (Blueprint $table) {
            $table->id();
            $table->string('dttMahoadon',255)->unique();
            $table->string('dttMakhachhang');
            $table->foreign('dttMakhachhang')->references('dttMakhachhang')->on('dttkhachhang')->onDelete('cascade');
            $table->datetime('dttNgayhoadon')->default(now());
            $table->datetime('dttNgaynhan');
            $table->string('dttHotenkhachhang',255);
            $table->string('dttEmail',255)->unique();
            $table->string('dttDienthoai',10)->unique();
            $table->string('dttDiachi',255);
            $table->float('dttTongtrigia');
            $table->tinyInteger('dttTrangthai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtthoadon');
    }
};
