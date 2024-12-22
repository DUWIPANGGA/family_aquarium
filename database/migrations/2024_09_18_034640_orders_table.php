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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key ke tabel users
            $table->string('status');  // Status pesanan, misal: 'pending', 'completed', 'cancelled'
            $table->decimal('total_amount', 10, 2);  // Total jumlah pesanan
            $table->string('shipping_address');  // Alamat pengiriman
            $table->timestamp('order_date');  // Waktu pesanan dibuat
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');  // Hapus tabel jika ada
    }
};
