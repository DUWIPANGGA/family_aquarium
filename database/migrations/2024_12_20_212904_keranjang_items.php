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
        Schema::create('keranjang_items', function (Blueprint $table) {
            $table->id(); // id as primary key with auto-increment
            $table->unsignedBigInteger('product_id'); // product_id as unsigned bigint
            $table->unsignedBigInteger('keranjang_id'); // keranjang_id as unsigned bigint
            $table->unsignedBigInteger('user_id');            $table->integer('quantity')->default(1); // quantity as integer with default value 1
            $table->decimal('price', 10, 2); // price as decimal
            $table->timestamps(); // created_at and updated_at (nullable by default)

            // Optionally, add foreign key constraints
            // $table->foreign('keranjang_id')->references('id')->on('keranjangs')->onDelete('cascade');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_items');
    }
};
