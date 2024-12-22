<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap jadwal
            $table->string('nama_pemesan'); // Nama pemesan
            $table->string('nomor_telepon'); // Nomor telepon pemesan
            $table->string('alamat_rumah'); // Alamat rumah pemesan
            $table->dateTime('jadwal_delivery'); // Tanggal dan waktu pengantaran
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ID produk yang dipesan, relasi ke tabel products
            $table->timestamps(); // Tanggal dan waktu dibuat atau diupdate
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
