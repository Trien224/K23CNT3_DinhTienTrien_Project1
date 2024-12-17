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
        Schema::create('dttnhacc', function (Blueprint $table) {
            $table->string('dttMaNCC')->primary();
            $table->string('dttTenNCC')->unique();
            $table->string('dttDiaChi');
            $table->float('dttDienThoai');
            //Stable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttnhacc');
    }
};
