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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->string('name');  // Nama sensor, misal: 'Sensor Suhu'
            $table->string('type');  // Jenis sensor, misal: 'temperature', 'pH', dll.
            $table->string('unit');  // Unit pengukuran, misal: 'Celsius', 'pH', dll.
            $table->decimal('value', 8, 2);  // Nilai yang diukur oleh sensor
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');  // Hapus tabel jika ada
    }
};