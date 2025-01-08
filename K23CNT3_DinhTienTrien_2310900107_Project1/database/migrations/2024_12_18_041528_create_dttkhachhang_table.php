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
        Schema::create('dttkhachhang', function (Blueprint $table) {
            $table->id();
            $table->string('dttMakhachhang',255)->unique();
            $table->string('dttHotenkhachhang',255);
            $table->string('dttEmail',255)->unique();
            $table->string('dttMakhau',255);
            $table->string('dttDienthoai',10)->unique();
            $table->string('dttDiachi',255);
            $table->datetime('dttNgayDangKy')->default(now());
            $table->tinyInteger('dttTrangthai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttkhachhang');
    }
};
