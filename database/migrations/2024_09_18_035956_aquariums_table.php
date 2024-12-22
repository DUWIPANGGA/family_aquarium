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
        Schema::create('aquariums', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->string('name');  // Nama akuarium
            $table->decimal('capacity', 8, 2);  // Kapasitas akuarium dalam liter
            $table->string('shape');  // Bentuk akuarium, misal: persegi, bulat, dll.
            $table->string('material');  // Material akuarium, misal: kaca, akrilik, dll.
            $table->decimal('price', 10, 2);  // Harga akuarium
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('aquariums');  // Hapus tabel jika ada
    }
};