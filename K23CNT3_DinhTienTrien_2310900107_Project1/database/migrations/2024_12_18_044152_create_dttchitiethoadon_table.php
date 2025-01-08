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
            $table->id(); // Tạo khóa chính tự động
            $table->unsignedBigInteger('dttHoadonID');  // Đảm bảo khóa ngoại có kiểu unsignedBigInteger
            $table->foreign('dttHoadonID')->references('id')->on('dtthoadon')->onDelete('cascade');
            
            $table->unsignedBigInteger('dttSanphamID');  // Đảm bảo khóa ngoại có kiểu unsignedBigInteger
            $table->foreign('dttSanphamID')->references('id')->on('dttsanpham')->onDelete('cascade');
            
            $table->integer('dttSoluongmua');
            $table->float('dttDongiamua');
            $table->float('dttThanhtien');
            $table->tinyInteger('dttTrangthai')->default(1);    
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
