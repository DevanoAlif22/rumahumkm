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
        Schema::create('highlight', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_umkm')->nullable();
            $table->foreign('id_umkm')->references('id')->on('umkm');
            $table->date('waktu_mulai');
            $table->date('waktu_berakhir');
            $table->boolean('pembayaran');
            $table->string('gambar_pembayaran');
            $table->integer('hari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highlight');
    }
};
