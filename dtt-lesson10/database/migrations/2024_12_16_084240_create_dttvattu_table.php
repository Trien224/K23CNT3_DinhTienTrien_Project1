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
        Schema::create('dttvattu', function (Blueprint $table) {
                // $table->id(); // mặc định id là khóa chính
                $table->string('dttMaVTu')->primary();
                $table->string('dttTenVTu')->unique();
                $table->string('dttDvTinh');
                $table->float('dttPhanTram');
                // $table->timestamps(); tạo trường mặc định
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttvattu');
    }
};
