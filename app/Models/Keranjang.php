<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang_items';

    protected $fillable = [
        'user_id',
    ];

    public function items()
    {
        return $this->hasMany(KeranjangItem::class);
    }
}
