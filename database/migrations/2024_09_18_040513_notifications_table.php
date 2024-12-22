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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key ke tabel users
            $table->string('title');  // Judul notifikasi
            $table->text('message');  // Pesan notifikasi
            $table->boolean('is_read')->default(false);  // Status apakah notifikasi sudah dibaca
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');  // Hapus tabel jika ada
    }
};