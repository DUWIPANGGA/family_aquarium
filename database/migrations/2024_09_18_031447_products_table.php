<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->string('name');  // Nama produk
            $table->text('description')->nullable();  // Deskripsi produk, bisa kosong
            $table->decimal('price', 15, 2);  // Harga produk dengan 2 angka desimal
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');  // Hapus tabel jika ada
    }
};
