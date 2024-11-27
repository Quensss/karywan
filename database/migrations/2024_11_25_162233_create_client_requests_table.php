<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('client_requests', function (Blueprint $table) {
        $table->id();
        $table->string('nama_perusahaan');
        $table->string('posisi');
        $table->integer('jumlah_pegawai');
        $table->string('lokasi');
        $table->string('durasi_kontrak');
        $table->text('kualifikasi');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_requests');
    }
};
