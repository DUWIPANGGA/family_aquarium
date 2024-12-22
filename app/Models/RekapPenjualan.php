<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPenjualan extends Model
{
    use HasFactory;

    protected $table = 'rekappenjualans'; // Sesuaikan dengan nama tabel di database
    protected $fillable = [
        'nomor_pesanan',
        'tanggal',
        'username_pembeli',
        'kategori_produk',
        'kode_barang',
        'metode_pembayaran',
        'jumlah_pembelian',
        'total_harga',
    ];
}
