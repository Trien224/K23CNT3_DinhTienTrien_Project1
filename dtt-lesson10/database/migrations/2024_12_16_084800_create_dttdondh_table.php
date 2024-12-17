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
        Schema::create('dttdondh', function (Blueprint $table) {
            $table->string('dttSoDH')->primary();
            $table->date('dttNgayDH');
            $table->string('dttMaNCC');
            $table->foreign('dttMaNCC')->references('dttMaNCC')->on('dttnhacc');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttdondh');
    }
};
