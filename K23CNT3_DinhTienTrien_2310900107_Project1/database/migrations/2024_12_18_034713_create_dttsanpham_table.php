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
        Schema::create('dttsanpham', function (Blueprint $table) {
            $table->id();
            $table->string('dttMasanpham', 255)->unique();  // Corrected varchar to string
            $table->string('dttTensanpham', 255);
            $table->string('dttHinhanh', 255)->nullable();
            $table->integer('dttSoluong');
            $table->decimal('dttDongia', 15, 2); 
            $table->string('dttMaloai'); 
            $table->foreign('dttMaloai')->references('dttMaloai')->on('dttloaisanpham')->onDelete('cascade');        // Corrected varchar to string
            $table->tinyInteger('dttTrangthai')->default(1);    // Tiny integer is fine
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dttsanpham');
    }
};
