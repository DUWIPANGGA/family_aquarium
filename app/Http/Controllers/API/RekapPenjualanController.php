<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RekapPenjualan;
use Illuminate\Http\Request;

class RekapPenjualanController extends Controller
{
    public function getRekapPenjualan()
    {
        // Validasi input parameter
        $validatedData = request()->validate([
            'keyword' => 'nullable|string|max:255',
            'per_page' => 'nullable|integer|min:1|max:100',
            'page' => 'nullable|integer|min:1',
        ]);

        $keyword = $validatedData['keyword'] ?? null;
        $per_page = $validatedData['per_page'] ?? 10;

        $rekap = RekapPenjualan::query();

        if ($keyword) {
            $rekap->where('username_pembeli', 'like', "%$keyword%")->orWhere('kode_barang', 'like', "%$keyword%")->orWhere('kategori_produk', 'like', "%$keyword%");
        }

        $rekaps = $rekap->paginate($per_page);

        $data = $rekaps->map(function ($s) {
            return [
                'id' => $s->id,
                'nomor_pesanan' => $s->nomor_pesanan,
                'tanggal' => $s->tanggal,
                'username_pembeli' => $s->username_pembeli,
                'kategori_produk' => $s->kategori_produk,
                'kode_barang' => $s->kode_barang,
                'metode_pembayaran' => $s->metode_pembayaran,
                'jumlah_pembelian' => $s->jumlah_pembelian,
                'total_harga' => $s->total_harga,
            ];
        });

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data Rekap Penjualan berhasil diambil',
            'pagination' => [
                'total' => $rekaps->total(),
                'per_page' => $rekaps->perPage(),
                'current_page' => $rekaps->currentPage(),
                'last_page' => $rekaps->lastPage(),
                'from' => $rekaps->firstItem(),
                'to' => $rekaps->lastItem(),
                'page' => $rekaps->currentPage(),
            ],
            'data' => $data,
        ]);
    }
}
