<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterQualitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_qualities', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap data kualitas air
            $table->string('aquarium'); // Nama atau ID aquarium
            $table->decimal('pH', 4, 2); // Nilai pH air dengan presisi 2 desimal
            $table->decimal('turbidity', 5, 2); // Tingkat kekeruhan air
            $table->timestamps(); // Tanggal dan waktu dibuat atau diperbarui
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('water_qualities');
    }
}
