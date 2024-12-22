<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekappenjualans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nomor_pesanan')->unique(); // Nomor pesanan, harus unik
            $table->date('tanggal'); // Tanggal penjualan
            $table->string('username_pembeli'); // Username pembeli
            $table->string('kategori_produk'); // Kategori produk, misalnya A atau B
            $table->string('kode_barang'); // Kode barang yang dijual
            $table->string('metode_pembayaran'); // Metode pembayaran, misalnya "Transfer Bank" atau "Cash"
            $table->integer('jumlah_pembelian'); // Jumlah produk yang dibeli
            $table->decimal('total_harga', 15, 2); // Total harga, misalnya "200000.00"
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekappenjualans');
    }
};
