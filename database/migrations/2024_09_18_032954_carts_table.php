<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity')->default(1);
            $table->timestamps();

            // Relasi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
        Schema::create('transactions', function (Blueprint $table) {
            $table->id(); // id as primary key with auto-increment
            $table->unsignedBigInteger('user_id')->index(); // user_id as an indexed column
            $table->unsignedBigInteger('cart_id')->index(); // cart_id as an indexed column
            $table->decimal('total_price', 10, 2); // total_price as decimal
            $table->string('payment_method', 255); // payment_method as varchar
            $table->timestamp('transaction_date')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->onUpdate(DB::raw('CURRENT_TIMESTAMP')); // transaction_date with current timestamp and on update
            $table->timestamps(); // created_at and updated_at (nullable by default)

            // Optionally, add foreign key constraints
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
        Schema::dropIfExists('transactions');  // Hapus tabel jika ada

    }
};
