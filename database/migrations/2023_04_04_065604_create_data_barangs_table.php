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
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->integer('kode_barang')->primary();
            $table->string('nama_barang',50)->nullable();
            $table->string('kategori_barang',10)->nullable();
            $table->float('harga',50)->nullable();
            $table->float('qty',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_barangs');
    }
};
