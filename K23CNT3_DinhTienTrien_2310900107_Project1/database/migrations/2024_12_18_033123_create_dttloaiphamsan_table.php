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
        Schema::create('dttloaisanpham', function (Blueprint $table) {
            $table->id();
            $table->string('dttMaloai', 25)->unique();  
            $table->string('dttTenloai', 255);         
            $table->tinyInteger('dttTrangthai')->default(1);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttloaisanpham');
    }
};
