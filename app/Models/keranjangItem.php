<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangItem extends Model
{
    use HasFactory;

    protected $table = 'keranjang_items';

    protected $fillable = [
        'keranjang_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Relasi ke keranjangs
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'keranjang_id');
    }

    // Relasi ke produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
