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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer');
            $table->date('date_of_entry');
            $table->foreignId('service');
            $table->foreignId('user');
            $table->enum('status', ['Proses Masuk', 'Proses', 'Proses Selesai']);
            $table->string('the_amount_of_goods');
            $table->string('total');
            $table->date('pick_up_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
