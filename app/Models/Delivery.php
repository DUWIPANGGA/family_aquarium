<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    // Nama tabel yang akan digunakan oleh model ini
    protected $table = 'deliveries';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama_pemesan', 'nomor_telepon', 'alamat_rumah', 'jadwal_delivery', 'product_id'
    ];

    // Mengaktifkan timestamps (created_at dan updated_at)
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}