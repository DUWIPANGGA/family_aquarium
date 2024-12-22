<?php

namespace App\Http\Controllers;

use App\Models\RekapPenjualan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekapPenjualanController extends Controller
{
    // Menampilkan semua data Rekap Penjualan
    public function index()
{
    // Ambil seluruh data Rekap Penjualan
    $rekapPenjualans = RekapPenjualan::all(); // Ambil semua data penjualan

    // Kirim data ke view
    return view('admin.rekappenjualans.index', compact('rekapPenjualans')); // Pastikan variabel ini dikirim ke view
}


    // Menampilkan form untuk membuat data baru
    public function create()
{
    // Tidak perlu variabel $rekapPenjualans di sini
    return view('admin.rekappenjualans.create');
}

    // Menyimpan data baru Rekap Penjualan
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_pesanan' => 'required|string',
            'tanggal' => 'required|date',
            'username_pembeli' => 'required|string',
            'kategori_produk' => 'required|string',
            'kode_barang' => 'required|string',
            'metode_pembayaran' => 'required|string',
            'jumlah_pembelian' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);

        // Membuat data baru
        RekapPenjualan::create($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.rekappenjualans.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan detail data Rekap Penjualan berdasarkan ID
   // Menampilkan semua data Rekap Penjualan
public function showAll()
{
    // Ambil seluruh data Rekap Penjualan
    $rekapPenjualans = RekapPenjualan::all(); // Ambil semua data penjualan

    // Kirim data ke view
    return view('admin.rekappenjualans.show', compact('rekapPenjualans')); // Pastikan variabel ini dikirim ke view
}


    // Menampilkan form edit data Rekap Penjualan
    public function edit($id)
    {
        $rekap = RekapPenjualan::findOrFail($id);

        return view('admin.rekappenjualans.edit', compact('rekap'));
    }

    // Mengupdate data Rekap Penjualan
    public function update(Request $request, $id)
    {
        $rekap = RekapPenjualan::findOrFail($id);

        // Validasi input
        $request->validate([
            'nomor_pesanan' => 'string',
            'tanggal' => 'date',
            'username_pembeli' => 'string',
            'kategori_produk' => 'string',
            'kode_barang' => 'string',
            'metode_pembayaran' => 'string',
            'jumlah_pembelian' => 'integer',
            'total_harga' => 'numeric',
        ]);

        // Update data
        $rekap->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.rekappenjualans.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data Rekap Penjualan
    public function destroy($id)
    {
        $rekap = RekapPenjualan::findOrFail($id);

        // Menghapus data
        $rekap->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.rekappenjualans.index')
            ->with('success', 'Data berhasil dihapus.');
    }

    // Mencetak laporan Rekap Penjualan dalam bentuk PDF
    public function cetak()
    {
        $rekapPenjualans = RekapPenjualan::all();

        // Menggunakan library DomPDF untuk membuat file PDF
        $pdf = Pdf::loadView('admin.rekappenjualans.cetak', compact('rekapPenjualans'));

        // Mengunduh file PDF
        return $pdf->download('rekap_penjualan.pdf');
    }
}
