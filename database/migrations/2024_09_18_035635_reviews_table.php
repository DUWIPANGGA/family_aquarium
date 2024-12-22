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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key ke tabel users
            $table->foreignId('product_id')->constrained()->onDelete('cascade');  // Foreign key ke tabel products
            $table->integer('rating');  // Nilai rating, misal dari 1 sampai 5
            $table->text('comment')->nullable();  // Komentar ulasan, bisa kosong
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');  // Hapus tabel jika ada
    }
};