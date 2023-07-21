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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamp('tgl_masuk');
            $table->timestamp('tgl_selesai');
            $table->foreignId('layanan_id');
            $table->enum('status', ['M', 'P', 'S']);
            $table->integer('jml_barang');
            $table->integer('total');
            $table->timestamp('tgl_diambil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
