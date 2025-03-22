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
        Schema::create('dataobat', function (Blueprint $table) {
            $table->id('obat_id'); // Primary key dengan nama 'obat_id'
            $table->string('nama_obat'); // Kolom untuk nama obat
            $table->integer('jumlah_stok'); // Kolom untuk jumlah stok
            $table->decimal('harga_jual', 10, 2); // Kolom untuk harga jual (10 digit total, 2 digit desimal)
            $table->decimal('harga_beli', 10, 2); // Kolom untuk harga beli (10 digit total, 2 digit desimal)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataobat');
    }
};
